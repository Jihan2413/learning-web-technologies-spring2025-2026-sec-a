<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Submitted Email: " . htmlspecialchars($_POST['email']);
}
?>