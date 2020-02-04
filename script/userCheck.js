
document.getElementById("register").disabled = true;
function userCheck() {
    let user_name = document.getElementById("user_name").value;
    $.post("app/userCheck.php",
        {
            user: user_name
        },
        function (data, status) {
            if (data == '<p style=\'color: red\'>User already exist</p>') {
                document.getElementById("register").disabled = true;
            } else {
                document.getElementById("register").disabled = false;
            }
            document.getElementById("checking").innerHTML = data;
        }
    );
}