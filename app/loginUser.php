<?php
require_once("include/db.php");
if (isset($_POST['login'])) {

    $username = $_POST['user_name'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE user_name='$username'
                                     AND password='$password'";

    $r = mysqli_query($con, $query);
    if ($r) {
        if (mysqli_num_rows($r) > 0) {
            $_SESSION['username'] = $username;
            header("Location:index.php");
        } else {
            echo "Your password or username do not matched";
        }
    }
}

?>