<?php

require_once "../app/models/user.php";

class profileController {

    public function profile() {

        session_start();

        if(!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit; // Added exit after redirect
        }

        $userModel = new user();
        $user = $userModel->findById($_SESSION['user_id']);

        include "../app/views/profile/edit.php";
    }

    public function update() {

        session_start();

        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));

        $imageName = $_FILES['image']['name'];
        $tmpName = $_FILES['image']['tmp_name'];

        $path = "uploads/" . time() . "_" . $imageName;

        move_uploaded_file($tmpName, $path);

        $userModel = new user();

        $userModel->updateProfile(
            $_SESSION['user_id'],
            $name,
            $email,
            $path
        );

        header("Location: profile.php");
    }
}