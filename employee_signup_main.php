<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/admin_login_style.css">
  <div class="heading">
  <h1>Employee Sign Up</h1>
</div>
    <title>Registration</title>
</head>
<body>
<?php
    session_start();
    include_once 'vehicle_data_database.php';
    if(isset($_POST['submit'])){
    // When form submitted, insert values into the database.
    
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $mainpassword = $_POST['main_password'];
        $confirmpassword = $_POST['confirm_password'];
        //$mainpassword = stripslashes($_REQUEST['main_password']);
        //$mainpassword = mysqli_real_escape_string($conn, $mainpassword);
        //$confirmpassword = stripslashes($_REQUEST['confirm_password']);
       // $confirmpassword = mysqli_real_escape_string($conn, $confirmpassword);
        $query    = "INSERT into employee_register (email, main_password, confirm_password)
                     VALUES ('$email', '$mainpassword', '$confirmpassword' )";
        $result   = mysqli_query($conn, $query);
        if($mainpassword == $confirmpassword){
        if ($result) {
            echo "<h3>You are registered successfully.</h3>";
        } else {
            echo "<h3>Required fields are missing.</h3>";
        }
      }
      else{
        echo "password and confirm password don't match";
      }
    
  }
?>
<div class = "details">
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="input_block" name="email" placeholder="Email Adress"><br>
        <input type="password" class="input_block" name="main_password" placeholder="Password"><br>
        <input type="password" class="input_block" name="confirm_password" placeholder="Confirm Password"><br>
        <input type="submit" name="submit" value="Register" class="button1"><br>
        <p class="link"><a href="employee_login_main.php">Click to Login</a></p>
    </form>
    </div>
</body>
</html>