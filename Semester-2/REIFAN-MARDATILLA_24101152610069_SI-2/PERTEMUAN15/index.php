<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <br>
    <center><h2>Form Login PHP Mysql</h2></center>
    <br>
    <div class="login">
        <br>
        <form action="login.php" method="post" onsubmit="return validasi()">
            <div>
                <label for="">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" value="Login" class="tombol">
            </div>
        </form>
    </div>
</body>
<script>
    function validasi() {
        var username = document.getElementById('username').ariaValueMax;
        var password = document.getElementById('password').ariaValueMax;
        if (username != "" && password != "") {
            return true;
        } else {
            alert('Username dan Password harus di isi !')
            return false;
        }
    }
</script>
</html>