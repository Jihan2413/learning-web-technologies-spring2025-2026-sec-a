<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Blood Group: " . htmlspecialchars($_POST['blood_group']) . "<br><br>";
}
?>

<html lang="en">
<head>
    <title>Blood Group Form</title>
</head>
<body>    
<form method="POST" action="">
    <fieldset>
        <legend>BLOOD GROUP</legend>
        <select name="blood_group" required>
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="AB+">AB+</option>
        </select>
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
</form>
</body>
</html>    