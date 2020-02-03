

document.getElementById("send").disabled = true;
function checkInDb() {
    let user_name = document.getElementById("user_name").value;
    $.post("app/checkInDb.php", {
            user: user_name
        },
        function (data, status) {
            if (data === "<option value='no user'>") {
                document.getElementById("send").disabled = true;
            } else {
                document.getElementById("send").disabled = false;
            }
            document.getElementById("user").innerHTML = data;

        }
    );
}