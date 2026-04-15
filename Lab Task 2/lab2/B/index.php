<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Submitted Email: " . htmlspecialchars($_POST['email']) . "<br><br>";
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
        <input type="email" name="email" required>
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
  </form>
</body>
</html>    