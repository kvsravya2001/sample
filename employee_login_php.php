<?php
global $email;
global $emai;
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
            // $_SESSION['v'] = $email;
            $_SESSION['email'] = $email;
            $emai = $_SESSION['email'];
            $table_name = 'employee_register';
            // Redirect to user dashboard page
            header("Location: main_options.php");
        } else {
            echo "<h3>Incorrect Username/password.</h3>";
        }
    } 
?>