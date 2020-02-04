<?php
require_once("include/db.php");
if (isset($_SESSION['username']) and isset($_GET['user'])) {
var_dump($_SESSION['username']);
    if (isset($_POST['text'])) {
        if ($_POST['text'] != "") {

            $senderName = $_SESSION['username'];
            $receiverName = $_GET['user'];
            $message = $_POST['text'];
            $date = date("Y-m-d h:i:sa");

            $query = "INSERT INTO messages (sender_name,receiver_name,message_text,date_time)
                      VALUES ('$senderName','$receiverName','$message','$date')";

            $r = mysqli_query($con, $query);

            if ($r) {
                ?>
                <div class="grey-msg">
                    <a href="#">Me</a>
                    <p><?php echo $message; ?></p>
                </div>
                <?php
            } else {
                echo $query;
            }

        } else {
            echo "please right something first";
        }
    } else {
        echo "problem with text";
    }
} else {
    echo "Please login or select a user to send a message";
}

?>