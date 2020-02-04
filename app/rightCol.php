<div id="right-col-container">
    <div id="msg-container">

        <?php
        if (isset($_GET['user'])) {
            $_GET['user'] = $_GET['user'];

        } else {
            $query = 'SELECT sender_name,receiver_name FROM messages WHERE sender_name="'.$_SESSION['username'].'" OR
                   receiver_name="'.$_SESSION['username'].'" ORDER BY date_time DESC LIMIT 1';

            $r = mysqli_query($con, $query);

            if ($r) {
                if (mysqli_num_rows($r) > 0) {
                    while ($row = mysqli_fetch_assoc($r)) {
                        $senderName = $row['sender_name'];
                        $receiverName = $row['receiver_name'];

                        if ($_SESSION['username'] === $senderName) {
                            $_GET['user'] = $receiverName;
                        } else {
                            $_GET['user'] = $senderName;
                        }

                    }
                } else {
                    echo "no msg";
                }
            } else {
               echo $query;
            }
        }

        $query = 'SELECT * FROM messages WHERE sender_name="'.$_SESSION['username'].'" AND receiver_name="'.$_GET['user'].'" 
        OR sender_name="'.$_GET['user'].'" AND receiver_name="'.$_SESSION['username'].'"';

        $r = mysqli_query($con, $query);
        if ($r) {
            while ($row = mysqli_fetch_assoc($r)) {
                $senderName = $row['sender_name'];
                $receiverName = $row['receiver_name'];
                $msg = $row['message_text'];

                if ($senderName === $_SESSION['username']) {
                    ?>
                    <div class="grey-msg">
                        <a href="#">Me</a>
                        <p><?php echo $msg; ?></p>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="white-msg">
                        <a href="#"><?php echo $senderName; ?></a>
                        <p><?php echo $msg; ?></p>
                    </div>

                    <?php
                }

            }
        } else {
            echo $query;
        }

        ?>


    </div>
    <textarea class="textarea" placeholder="Write your message..."></textarea>

</div>