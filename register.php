<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="script/userCheck.js"></script>
    <title>Registration</title>

</head>

<body>
<h1 align="center">Registration form</h1>

<div id="container">

    <form method="post">

        <input type="text" placeholder="Username" class="input" id="user_name" onkeyup="userCheck()" name="user_name"
               required> <div id="checking"></div><br><br>
        <input type="password" placeholder="Password" class="input" name="pass" required><br><br>
        <input type="submit" id="register" name="register" value="register">
        <?php include("app/registerUser.php") ?>
        <a href="login.php">Login here</a>
    </form>
</div>
</body>
</html>