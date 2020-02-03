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

<div id="container">


    <div id="menu">
        <?php
        echo $_SESSION['username'];
        echo '<a style="float: right;color: #ffffff; href="app/logoutUser.php">Log out</a>';

        ?>
    </div>

    <?php require_once("app/leftCol.php"); ?>

    <div id="right-col">
        <div id="right-col-container">
            <div id="msg-container">
                <div class="grey-msg">
                    <a href="#">Me</a>
                    <p> This messagge will show grey</p>
                </div>
                <div class="white-msg">
                    <a href="#">You</a>
                    <p>This messagge will show white</p>
                </div>

            </div>
            <textarea class="textarea" placeholder="Write your message..."></textarea>

        </div>

    </div>
    
</div>

</body>
</html>


