<div id="new-message">
    <p class="m-header">New Message</p>
    <p class="m-body">
    <form align="center" method="post">
        <input type="text" list="user" onkeyup="checkInDb()"
               class="message-input" placeholder="username" name="user_name"
               id="user_name"/>
        <datalist id="user"></datalist>
        <br><br>
        <textarea class="message-input" name="massage" placeholder="write your message"></textarea><br><br>
        <input type="submit" value="send" id="send" name="send"/>
        <button onclick="document.getElementById('new-message').style.display='none'">Cancel</button>
    </form>
    </p>
    <p class="m-footer">Click send to send</p>
</div>
<?php
include("include/db.php");
if (isset($_POST['send'])) {
    $senderName = $_SESSION['username'];
    $receiverName = $_POST['user_name'];
    $message = $_POST['massage'];
    $date = date("Y-m-d h:i:sa");

    $query = "INSERT INTO messages (sender_name,receiver_name,message_text,date_time)
VALUES ('$senderName','$receiverName','$message','$date')";

    $r = mysqli_query($con, $query);
    if ($r) {
        echo "message send";
    } else {
        echo "$query";
    }
}
?>