$("document").ready(function (event) {
    $("#right-col-container").on('submit', '#msg-form', function () {
        let message_text = $("#msg-text").val();
        $.post("app/sendingMsg.php?user=<?php echo $_GET['user'];?>", {
                text: message_text,
            }, function (data, status) {

                $("#msg-text").val("");
                document.getElementById("msg-container").innerHTML += data;
            }
        );
    });
    $("#right-col-container").keypress(function (e) {
        if (e.keyCode === 13 && !e.shiftKey) {
            $("#msg-form").submit();
        }
    })

});