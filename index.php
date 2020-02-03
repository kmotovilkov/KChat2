<?php
ob_start();
session_start();

if (isset($_SESSION['username'])) {
    //echo "How are you " . $_SESSION['username'];

} else {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <title>HOME</title>

</head>

<body>

<div id="new-message">
    <p class="m-header">New Message</p>
    <p class="m-body">
    <form align="center" method="post">
        <input type="text" class="message-input" placeholder="username" name="user_name"/>
        
        <br><br>
        <textarea class="message-input" placeholder="write your message"></textarea><br><br>
        <input type="submit" value="send" name="send">
        <button onclick="document.getElementById('new-message').style.display='none'">Cancel</button>
    </form>
    </p>
    <p class="m-footer">Click send to send</p>
</div>

<div id="container">
    <div id="menu">
        <?php
        echo $_SESSION['username'];
        echo '<a style="float: right;color: #ffffff; href="app/logoutUser.php">Log out</a>';

        ?>
    </div>
    <div id="left-col">
        <?php require_once("app/leftCol.php"); ?>
    </div>
    <div id="right-col">
        <?php require_once("app/rightCol.php"); ?>

    </div>

</div>

</body>
</html>


