<?php
include_once 'vehicle_data_database.php';
if(isset($_POST['save']))
{
    $email = $_POST['email'];
    $password = $_POST['main_password'];
    $confirmpassword = $_POST['confirm_password'];
    $sql = "INSERT INTO admin_signup (email, main_password, confirm_password)
    VALUES ('$email', '$password', '$confirmpassword') ";
    if($password == $confirmpassword){
    if(mysqli_query($conn, $sql)){
        echo "Registration details recorded";
    }
    else{
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
}
else{
    echo "Password and Confirm Password doesn't match";
}
    mysqli_close($conn);
}
?>