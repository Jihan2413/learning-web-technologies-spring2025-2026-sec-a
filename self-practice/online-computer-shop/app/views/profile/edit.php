<!DOCTYPE html>
<html>
<head>

    <title>Profile</title>

</head>
<body>

<form
    method="POST"
    enctype="multipart/form-data"
    action="profile.php"
>

    <input
        type="text"
        name="name"
        value="<?php echo $user['name']; ?>"
    >

    <input
        type="email"
        name="email"
        value="<?php echo $user['email']; ?>"
    >

    <input type="file" name="image">

    <button type="submit">

        Update Profile

    </button>

</form>

</body>
</html>