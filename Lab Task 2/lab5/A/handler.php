<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['degree'])) {
    $degrees = $_POST['degree'];
    echo "Degrees: ";
    foreach($degrees as $degree) {
        echo htmlspecialchars($degree) . " ";
    }
} else {
    echo "No degree selected.";
}
?>