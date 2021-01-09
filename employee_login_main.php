<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/admin_login_style.css">
  <div class="heading">
  <h1>Employee Login</h1>
</div>
    <title>Login</title>
</head>
<body>
<?php
     session_start();
     include_once 'vehicle_data_database.php';
    // When form submitted, check and create user session.
    if(isset($_POST['submit'])){
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($conn, $email);
        $mainpassword = stripslashes($_REQUEST['main_password']);
        $mainpassword = mysqli_real_escape_string($conn, $mainpassword);
        // Check user is exist in the database
        $query    = "SELECT * FROM employee_register WHERE email='$email'
                     AND main_password='$mainpassword'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: main_options.php");
        } else {
            echo "<h3>Incorrect Username/password.</h3>";
        }
    } 
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
</body>
</html>
