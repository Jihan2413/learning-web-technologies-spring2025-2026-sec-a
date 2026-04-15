<?php
$gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['gender'])) {
    $gender = htmlspecialchars($_POST['gender']);
    echo "Gender: " . $gender . "<br><br>";
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
        <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"; ?> required> Male
        <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"; ?>> Female
        <input type="radio" name="gender" value="Other" <?php if($gender == "Other") echo "checked"; ?>> Other
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
  </form>
</body>
</html>