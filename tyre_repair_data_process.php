<?php
include_once 'vehicle_data_database.php';
if(isset($_POST['save']))
{
    $tyreId = $_POST['pysical_tyre_id'];
    $nsd = $_POST['nsd'];
    $sql = "INSERT INTO tyre_repair_details (physical_tyre_id, nsd)
    VALUES ('$tyreId', '$nsd') ";
    if(mysqli_query($conn, $sql)){
        echo "New record inserted successfully !";
    }
    else{
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>