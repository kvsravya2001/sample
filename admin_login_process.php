<?php
session_start();
include_once 'vehicle_data_database.php';
if(isset($_POST['save']))
{
    extract($_POST);
    $sql = mysqli_query($conn,"SELECT email, main_password FROM admin_signup where email='$email' and main_password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["email"]=$row['email'];
        $_SESSION["main_password"]=$row['main_password'];
        header("Location: home.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>