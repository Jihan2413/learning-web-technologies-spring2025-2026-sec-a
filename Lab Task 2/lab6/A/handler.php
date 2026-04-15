<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Blood Group: " . htmlspecialchars($_POST['blood_group']);
}
?>