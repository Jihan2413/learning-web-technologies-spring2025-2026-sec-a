<?php
$dd = $mm = $yyyy = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dd = htmlspecialchars($_POST['dd']);
    $mm = htmlspecialchars($_POST['mm']);
    $yyyy = htmlspecialchars($_POST['yyyy']);
    echo "Date of Birth: $dd/$mm/$yyyy <br><br>";
}
?>

<html lang="en">
<head>
    <title>Date of Birth Form</title>
</head>
<body>
<form method="POST" action="">
    <fieldset>
        <legend>DATE OF BIRTH</legend>
        <input type="text" name="dd" size="2" value="<?php echo $dd; ?>" placeholder="dd" required> /
        <input type="text" name="mm" size="2" value="<?php echo $mm; ?>" placeholder="mm" required> /
        <input type="text" name="yyyy" size="4" value="<?php echo $yyyy; ?>" placeholder="yyyy" required>
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
</form>
</body>
</html>