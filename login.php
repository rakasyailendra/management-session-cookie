<?php
session_start();
if (isset($_POST['submit'])) {
    $username = "rakasyainz";
    $password = "12345";

    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['login'] = true;
        header("Location: admin.php");
    } else {
        echo "Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
</head>
<body>
    <form method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>