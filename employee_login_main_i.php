<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/admin_login_style1.css">
  <div class="heading">
  <h1>Employee Login</h1>
</div>
    <title>Login</title>
</head>
<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class = "content">
<?php
include 'employee_login_php.php';
?>
<div class = "details">
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="input_block" name="email" placeholder="email" autofocus="true"/><br>
        <input type="password" class="input_block" name="main_password" placeholder="Password"/><br>
        <input type="submit" value="Login" name="submit" class="button1"/><br>
        <p class="link"><a href="employee_signup_main.php">New Registration</a></p>
  </form>
  </div>
</div>
</body>
</html>
