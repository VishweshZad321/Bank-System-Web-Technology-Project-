<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>
<link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form name="Loginform" action="Login.php" method="Post">
<h1 style="font-family: cooper;color:White;font-size:50px;"><marquee>BANK MANAGEMENT SYSTEM</marquee></h1>
<div class="outter">
<div class="login-box">
<h1>Login</h1>
<div class="textbox">
    <p class="glyphicon glyphicon-user"><input type="text" placeholder="Username" name="txtusername" value=""></p>
</div>
<div class="textbox">
    <span class="glyphicon glyphicon-lock"><input type="Password" placeholder="Password" name="txtpassword" value=""></span>
</div>
    <button class="btnlogin" style="vertical-align:middle" value="Submit" name="btnsubmit" type="Submit"><span>Login</span></button><br><br>&nbsp;
    <a href="emplyee_personal.html">New registeration?</a>
</div >
</div>
</form>

</body>
</html>