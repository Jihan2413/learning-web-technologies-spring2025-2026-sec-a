<?php
$bg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bg = htmlspecialchars($_POST['blood_group']);
    echo "Blood Group: " . $bg . "<br><br>";
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
            <option value="A+" <?php if($bg == "A+") echo "selected"; ?>>A+</option>
            <option value="B+" <?php if($bg == "B+") echo "selected"; ?>>B+</option>
            <option value="O+" <?php if($bg == "O+") echo "selected"; ?>>O+</option>
            <option value="AB+" <?php if($bg == "AB+") echo "selected"; ?>>AB+</option>
        </select>
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
</form>
</body>
</html>    