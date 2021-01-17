<?php
include_once 'vehicle_data_database.php';
// global $useId; 
if(isset($_POST['save']))
{
    $userId = $_POST['userid'];
    $tyreId = $_POST['pysical_tyre_id'];
    $nsd = $_POST['nsd'];
    $sql = "INSERT INTO tyre_repair_details (userid, physical_tyre_id, nsd)
    VALUES ('$userId', '$tyreId', '$nsd') ";
    if(mysqli_query($conn, $sql)){
        // $useId = $userId;
        // $_SESSION['uid_id'] = $userId;
        echo "New record inserted successfully !";

    }
    else{
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>