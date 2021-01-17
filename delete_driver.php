<?php
session_start();
include_once 'vehicle_retrieve_database.php';
if(isset($_GET['id'])) {
$rn = $_GET['id'];
}
else{
    $rn = 0;
 
}

$query = "DELETE FROM driver_details WHERE driver_id = $rn";

$data = mysqli_query($conn, $query);

if($data){
    echo "<font color = 'black'>Record deleted successfully";
}
else{
    echo "<font color = 'black'>Record deletion unsuccessful";
}
?>