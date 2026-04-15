<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['gender'])) {
    echo "Gender: " . htmlspecialchars($_POST['gender']) . "<br><br>";
}
?>

<html lang="en">
<head>
    <title>Gender Form</title>
</head>
<body>
  <form method="POST" action="">
    <fieldset>
        <legend>GENDER</legend>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
  </form>
</body>
</html>