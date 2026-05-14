<?php
require_once "../app/controllers/profileController.php";

$profile = new profileController();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $profile->update(); // Image/Data update er jonno
} else {
    $profile->profile(); // Profile page show korar jonno
}