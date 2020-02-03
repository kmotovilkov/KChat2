<?php
ob_start();
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/login.css">
    <title>Login</title>

</head>
<body>
<h1 align="center">Login form</h1>
<div id="container">
    <form method="post">
        <input type="text" placeholder="Username" class="input"   name="user_name"><br><br>
        <input type="password" placeholder="Password" class="input" name="password" ><br><br>
        <input type="submit" id="login" name="login" value="login">
        <a href="register.php">Register here</a>
    </form>

</div>

<?php include("app/loginUser.php") ?>
</body>
</html>