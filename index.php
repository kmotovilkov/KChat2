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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="script/checkInDb.js"></script>
<!--    <script type="text/javascript" src="script/msg.js"></script>-->
    <title>HOME</title>
</head>
<body>
<?php require_once("app/newMessage.php"); ?>
<div id="container">
    <div id="menu">
        <?php
        echo $_SESSION['username'];
        echo '<a  style="float: right;color: #ffffff;" href="app/logoutUser.php" >Log out</a>';
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


