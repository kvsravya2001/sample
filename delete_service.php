<?php
session_start();
include_once 'admin_database.php';

if(isset($_GET['id'])) {
$rn = $_GET['id'];
}
else{
    $rn = "p";
 
}

$query = "DELETE FROM vehicle_service_details WHERE Truck_Id = '$rn'";

$data = mysqli_query($conn, $query);

if($data){
    echo "<font color = 'black'>Record deleted successfully";
}
else{
    echo "<font color = 'black'>Record deletion unsuccessful";
}
?>