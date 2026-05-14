<?php
require_once "../app/controllers/authController.php";

$auth = new authController();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auth->login(); // Form submit hole login verify korbe
} else {
    include "../app/views/auth/login.php"; // Form submit na hole login page dekhabe
}