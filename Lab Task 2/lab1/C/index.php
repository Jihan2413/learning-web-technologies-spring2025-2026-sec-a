<?php
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "Submitted Name: " . $name . "<br><br>";
}
?>

<html lang="en">
<head>
    <title>Name Form</title>
</head>
<body>
  <form method="POST" action="">
    <fieldset>
        <legend>NAME</legend>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
  </form>
</body>
</html>