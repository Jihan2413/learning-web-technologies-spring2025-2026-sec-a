<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['gender'])) {
    echo "Gender: " . htmlspecialchars($_POST['gender']);
}
?>