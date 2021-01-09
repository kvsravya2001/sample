<?php
include_once 'driver_data_database.php';
if(isset($_POST['save']))
{
    $id = $_POST['driver_id'];
    $name = $_POST['driver_name'];
    $age = $_POST['age'];
    $years = $_POST['years_of_experience'];
    $mobile = $_POST['mobile_number'];
    $vehicleid = $_POST['vehicle_id'];
    $status = $_POST['status'];
    $from = $_POST['location_from'];
    $to = $_POST['location_to'];
    $attendance = $_POST['attendance'];
    $expected = $_POST['salary_expected'];
    if($attendance>90 && $attendance<=100)
    {
        $received = $expected;
    }
    else if($attendance>70 && $attendance<=90)
    {
        $received = ($expected - 100); 
    }
    else
    if($attendance>50 && $attendance<=70)
    {
        $received = ($expected - 200);
    }
    else
    {
        $received = ($expected - 300);
    }
    $sql = "INSERT INTO driver_details (driver_id, driver_name, Age, Years_of_Experience, Mobile_Number, vehicle_id, transfer_status, transfer_from, transfer_to, attendance_days, salary_expected, salary_received )
    VALUES ('$id', '$name', '$age', '$years', '$mobile', '$vehicleid', '$status', '$from', '$to', '$attendance', '$expected', '$received') ";
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
CREATE TABLE driver_details (
   driver_id varchar(50) NOT NULL,
 driver_name int(11) NOT NULL AUTO_INCREMENT,
 Age varchar(50) NOT NULL,
 Years_of_Experience varchar(50) NOT NULL,
 Mobile_Number varchar(50) NOT NULL,
 vehicle_id varchar(50) NOT NULL,
    transfer_status varchar(10) NOT NULL,
    transfer_from varchar(10) NOT NULL,
    transfer_to varchar(10) NOT NULL,
    attendance_days varchar(10) NOT NULL,
    salary_expected varchar(100) NOT NULL,
    salary_received varchar(100) NOT NULL,
    salary_reduction varchar(100) NOT NULL,
 PRIMARY KEY (driver_id),
 FOREIGN KEY (vehicle_id) REFERENCES vehicle_details(manufacturing_id)
);
-->