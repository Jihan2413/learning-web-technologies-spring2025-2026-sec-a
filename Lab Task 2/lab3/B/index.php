<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Date of Birth: " . htmlspecialchars($_POST['dd']) . "/" . htmlspecialchars($_POST['mm']) . "/" . htmlspecialchars($_POST['yyyy']) . "<br><br>";
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
        <input type="text" name="dd" size="2" placeholder="dd" required> /
        <input type="text" name="mm" size="2" placeholder="mm" required> /
        <input type="text" name="yyyy" size="4" placeholder="yyyy" required>
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
  </form>
</body>
</html>