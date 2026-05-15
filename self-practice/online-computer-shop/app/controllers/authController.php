<?php

require_once "../app/models/user.php";

class authController {

    public function register() {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $password = trim($_POST['password']);
            $role = $_POST['role'];

            if(strlen($password) < 8) {
                die("Password must be at least 8 characters");
            }

            $userModel = new user();
            $result = $userModel->register($name, $email, $password, $role);

            if($result === true) {
                header("Location: login.php");
            } else {
                echo $result;
            }
        }
    }

    public function login() {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = htmlspecialchars(trim($_POST['email']));
            $password = trim($_POST['password']);

            $userModel = new user();
            $user = $userModel->login($email, $password);

            if($user) {

                session_start();

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['role'] = $user['role'];

                if(isset($_POST['remember'])) {

                    $token = bin2hex(random_bytes(32));
                    $userModel->storeRememberToken($user['id'], $token);

                    // User ID ebang Token eksathe store kora hocche
                    setcookie(
                        "remember_token",
                        $user['id'] . ':' . $token,
                        time() + (86400 * 30),
                        "/"
                    );
                }

                header("Location: index.php");

            } else {

                echo "Invalid Credentials";
            }
        }
    }

    public function logout() {

        session_start();
        session_destroy();

        setcookie("remember_token", "", time() - 3600, "/");

        header("Location: login.php");
    }
}