<?php
$email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    echo "Submitted Email: " . $email . "<br><br>";
}
?>

<html lang="en">
<head>
    <title>Email Form</title>
</head>
<body>    
  <form method="POST" action="">
    <fieldset>
        <legend>EMAIL</legend>
        <input type="email" name="email" value="<?php echo $email; ?>" required>
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
  </form>
</body>
</html>