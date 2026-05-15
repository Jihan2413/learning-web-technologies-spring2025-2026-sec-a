<!DOCTYPE html>
<html>
<head>

    <title>Register</title>

    <script src="assets/js/validation.js"></script>

</head>
<body>

<form method="POST" action="register.php" onsubmit="return validateRegister()">

    <input type="text" name="name" id="name" placeholder="Name">

    <input type="email" name="email" id="email" placeholder="Email">

    <input type="password" name="password" id="password" placeholder="Password">

    <select name="role">

        <option value="customer">Customer</option>
        <option value="admin">Admin</option>

    </select>

    <button type="submit">Register</button>

</form>

</body>
</html>