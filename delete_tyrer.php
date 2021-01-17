<?php
session_start();
include_once 'admin_database.php';

if(isset($_GET['id'])) {
$rn = $_GET['id'];
}
else{
    $rn = "p";
 
}

$query = "DELETE FROM tyre_repair_details WHERE physical_tyre_id = '$rn'";

$data = mysqli_query($conn, $query);

if($data){
    echo "<font color = 'black'>Record deleted successfully";
}
else{
    echo "<font color = 'black'>Record deletion unsuccessful";
}
?>