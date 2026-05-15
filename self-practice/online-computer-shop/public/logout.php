<?php
require_once "../app/controllers/authController.php";

$auth = new authController();
$auth->logout();