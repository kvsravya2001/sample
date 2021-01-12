<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/admin_login_style1.css">
  <div class="heading">
  <h1>Admin Sign Up</h1>
</div>
    <title>Registration</title>
</head>
<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class = "content">
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
        $query    = "INSERT into admin_register (email, main_password, confirm_password)
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
        <p class="link"><a href="admin_login_main.php">Click to Login</a></p>
    </form>
    </div>
</div>
</body>
</html>



<!--<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/admin_login_style.css">
  <div class="heading">
  <h1>Admin Sign Up</h1>
</div>
</head>
  <body>
      <div class = "details"> 
      <form name="myform" method="post" action="admin_signup_process.php" onsubmit="return validateform()" > 
      
  <p class="email">Enter Email Id:<br>
		<input type="text" name="email" class = "input_block">
        <br></p>
        <p class="password">Enter Password:<br>
		<input type="password" name="main_password" class = "input_block">
        <br></p>
        <p class="password">Confirm Password:<br>
		<input type="password" name="confirm_password" class = "input_block">
        <br></p>
        <a href = "http://localhost/sample/admin_login_main.php">Click here to login</a>
        <br>
        <input type="submit" name="save" value="submit" class = "button1">
      </form>
      
</div>
<script>

function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.mainpassword.value; 
var confirmpassword=document.myform.confirmpassword.value; 
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  
} 
else if(password ! = confirmpassword){
    alert("Password and confirm password don't match");
    return false;
} 
}  
    
    </script>
  </body>
</html>-->