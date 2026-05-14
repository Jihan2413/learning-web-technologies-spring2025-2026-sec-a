<?php

session_start();

require_once "../app/models/user.php";
require_once "../app/controllers/homeController.php";

// REMEMBER ME AUTO LOGIN LOGIC
if(!isset($_SESSION['user_id']) && isset($_COOKIE['remember_token'])) {
    
    $cookie_parts = explode(':', $_COOKIE['remember_token']);
    
    if(count($cookie_parts) == 2) {
        $id = $cookie_parts[0];
        $token = $cookie_parts[1];
        
        $userModel = new user();
        
        // verify token from DB
        if($userModel->verifyRememberToken($id, $token)) {
            $userData = $userModel->findById($id);
            if($userData) {
                $_SESSION['user_id'] = $userData['id'];
                $_SESSION['name'] = $userData['name'];
                $_SESSION['role'] = $userData['role'];
            }
        }
    }
}

$home = new homeController();
$home->index();