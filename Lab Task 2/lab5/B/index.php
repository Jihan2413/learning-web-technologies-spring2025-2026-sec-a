<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['degree'])) {
    echo "Degrees: ";
    foreach($_POST['degree'] as $degree) {
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
        <input type="checkbox" name="degree[]" value="SSC"> SSC
        <input type="checkbox" name="degree[]" value="HSC"> HSC
        <input type="checkbox" name="degree[]" value="BSc"> BSc
        <input type="checkbox" name="degree[]" value="MSc"> MSc
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
</form>
</body>
</html>        