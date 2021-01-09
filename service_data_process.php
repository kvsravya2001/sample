<?php
include_once 'driver_data_database.php';
if(isset($_POST['save']))
{
    $truck_id = $_POST['truck_id'];
    $model = $_POST['truck_model'];
    $driver_id = $_POST['driver_id'];
    $inspection = $_POST['inspection'];
    $maintanance = $_POST['maintanance'];
    $type = $_POST['service_type'];
    $sql = "INSERT INTO vehicle_service_details (Truck_Id, Truck_Model, Driver_Id, Inspection_Result, Maintanance_Result, Service_Type )
    VALUES ('$truck_id', '$model', '$driver_id', '$inspection', '$maintanance', '$type') ";
    if(mysqli_query($conn, $sql)){
        echo "New record inserted successfully !";
    }
    else{
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!--
CREATE TABLE vehicle_service_details (
   Truck_Id varchar(50) NOT NULL,
 Truck_Model varchat(50) NOT NULL,
 Driver_Id varchar(50) NOT NULL,
 Inspection_Result varchar(50) NOT NULL,
 Maintanance_Result varchar(50) NOT NULL,
 Service_Type varchar(50) NOT NULL,
 FOREIGN KEY (Truck_Id) REFERENCES vehicle_details(manufacturing_id),
 FOREIGN KEY (Driver_Id) REFERENCES driver_details(driver_id)
 
);
-->