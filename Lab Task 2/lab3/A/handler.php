<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Date of Birth: " . htmlspecialchars($_POST['dd']) . "/" . htmlspecialchars($_POST['mm']) . "/" . htmlspecialchars($_POST['yyyy']);
}
?>