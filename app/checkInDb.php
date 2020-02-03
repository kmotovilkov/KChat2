<?php
require_once("../include/db.php");

$user = $_POST['user'];
if (isset($user)) {
    $query = "SELECT * FROM users WHERE user_name='$user'";
    $r = mysqli_query($con, $query);

    if (mysqli_num_rows($r) > 0) {
        while ($row = mysqli_fetch_assoc($r)) {
            $username = $row['user_name'];
            echo "<option value='$username'>";
        }
    } else {
        echo "<option value='no user'>";
    }
}