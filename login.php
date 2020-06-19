<head>
    <title></title>

</head>
<body><form method="POST">
    <div class="kotak">
        <div class="login">
            <center><img src="layout/assets/images/loginuts.png" width="45%" height="140px"></center>
        </div>
        <div class="input">
            <input type="text" required name="user_name">
            <span class="phold">Username</span>
        </div><br>
        <div class="input">
            <input type="password" required name="password">
            <span class="phold">Password</span>
        </div>
        <br><br>
        <input type="submit" name="log" value="Login" id="log">
        <br><br>
        <center><h4>Belum punya akun? <a href="regis.php"> Daftar disini!</a></h4></center>
    </div>
    </form>
</body>
<?php
require_once "app/user.php";
$kat = new user();
   if (isset($_POST['log'])) {
      $kat->login($_POST['user_name'],$_POST['password']);
    }
 ?>
