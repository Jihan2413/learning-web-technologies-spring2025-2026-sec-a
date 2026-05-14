<?php
require_once "../app/controllers/authController.php";

$auth = new authController();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auth->register(); // Form submit hole register korbe
} else {
    include "../app/views/auth/register.php"; // Form submit na hole shudhu page ta dekhabe
}