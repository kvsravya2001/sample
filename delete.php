<?php
session_start();
include_once 'admin_database.php';


$rn = $_GET['id'];


$query = "DELETE FROM vehicle_details WHERE manufacturing_id = '$rn'";

$data = mysqli_query($conn, $query);

if($data){
    echo "<font color = 'black'>Record deleted successfully";
}
else{
    echo "<font color = 'black'>Record deletion unsuccessful";
}
?>