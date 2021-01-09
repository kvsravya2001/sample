<?php
include_once 'vehicle_data_database.php';
if(isset($_POST['save']))
{
    $tyreId = $_POST['tyre_id'];
    $tyre = $_POST['tyre_status'];
    $cost;
    $distance;
    $odometer;
    if($tyre == "Insersion")
    {
        $odometer = 0;
        $cost = $_POST['cost'];
        $distance = $_POST['distance'];
    }
    else{
        $odometer = $_POST['odometer'];
        $cost = 0;
        $distance = 0;
    }
    $sql = "INSERT INTO tyre_details (tyre_id, tyre_status, odometer, distance, cost)
    VALUES ('$tyreId', '$tyre', '$odometer', '$distance', '$cost') ";
    if(mysqli_query($conn, $sql)){
        echo "New record inserted successfully !";
    }
    else{
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>