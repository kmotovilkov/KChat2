<?php
require_once("include/db.php");

if (isset($_POST['register'])) {
    $username = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
    $password = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));

    $query = " INSERT INTO users (user_name,password)
 VALUES ('$username','$password')";

    $r = mysqli_query($con, $query);
    if ($r) {
        echo "<script>window.open('login.php','_self')</script>";
    } else {
        echo "NO registered";

    }
}


