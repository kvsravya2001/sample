<?php

include_once "vehicle_data_database.php"; // Using database connection file here

$id = $_GET['manufacturing_id']; // get id through query string

$del = mysqli_query($conn,"DELETE from vehicle_details where manufacturing_id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:vehicle_retrive_data_admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>