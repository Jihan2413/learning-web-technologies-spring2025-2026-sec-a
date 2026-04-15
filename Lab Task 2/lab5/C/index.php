<?php
$selected_degrees = [];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['degree'])) {
    $selected_degrees = $_POST['degree'];
    echo "Degrees: ";
    foreach($selected_degrees as $degree) {
        echo htmlspecialchars($degree) . " ";
    }
    echo "<br><br>";
}
?>

<html lang="en">
<head>
    <title>Degree Form</title>
</head>
<body>
<form method="POST" action="">
    <fieldset>
        <legend>DEGREE</legend>
        <input type="checkbox" name="degree[]" value="SSC" <?php if(in_array("SSC", $selected_degrees)) echo "checked"; ?>> SSC
        <input type="checkbox" name="degree[]" value="HSC" <?php if(in_array("HSC", $selected_degrees)) echo "checked"; ?>> HSC
        <input type="checkbox" name="degree[]" value="BSc" <?php if(in_array("BSc", $selected_degrees)) echo "checked"; ?>> BSc
        <input type="checkbox" name="degree[]" value="MSc" <?php if(in_array("MSc", $selected_degrees)) echo "checked"; ?>> MSc
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
</form>
</body>
</html>