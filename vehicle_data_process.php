<?php
include_once 'vehicle_data_database.php';
if(isset($_POST['save']))
{
    $manufacturingId = $_POST['manufacturing_id'];
    $truckModel = $_POST['truck_model'];
    $noOfWheels = $_POST['no_of_wheels'];
    $sql = "INSERT INTO vehicle_details (truck_model, no_of_wheels, manufacturing_id)
    VALUES ('$truckModel', '$noOfWheels', '$manufacturingId') ";
    if(mysqli_query($conn, $sql)){
        echo "New record inserted successfully !";
    }
    else{
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>