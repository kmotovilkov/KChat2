<?php
require("../include/db.php");

$user = strtolower($_POST['user']);
if (isset($user)) {
    $query = "SELECT * FROM users WHERE user_name= '$user' ";
    $r = mysqli_query($con, $query);
    if ($r) {

        if (mysqli_num_rows($r) > 0) {
            echo "<p style='color: red'>User already exist</p>";
        } else {
            echo "<p style='color: green'>You can take this name</p>";
        }
    } else {
        echo $query;
    }
}