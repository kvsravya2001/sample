<?php
include_once 'vehicle_retrieve_database.php';
$result = mysqli_query($conn,"SELECT * FROM driver_details");
?>
<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/vehicle_retrieve_style1.css">
  <div class="heading">
  <h1>View Driver Details</h1>
</div>
 </head>
<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class = "content">
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td><b>Driver Id</b></td>
    <td><b>Driver name</b></td>
    <td><b>Age</b></td>
    <td><b>Experience in years</b></td>
    <td><b>Mobile Number</b></td>
    <td><b>Vehicle Id</b></td>
    <td><b>Transfer Status</b></td>
    <td><b>Transfer From</b></td>
    <td><b>Transfer To</b></td>
    <td><b>No of days Attended</b></td>
    <td><b>Salary Expected</b></td>
    <td><b>Salary Received</b></td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["driver_id"]; ?></td>
    <td><?php echo $row["driver_name"]; ?></td>
    <td><?php echo $row["Age"]; ?></td>
    <td><?php echo $row["Years_of_Experience"]; ?></td>
    <td><?php echo $row["Mobile_Number"]; ?></td>
    <td><?php echo $row["vehicle_id"]; ?></td>
    <td><?php echo $row["transfer_status"]; ?></td>
    <td><?php echo $row["transfer_from"]; ?></td>
    <td><?php echo $row["transfer_to"]; ?></td>
    <td><?php echo $row["attendance_days"]; ?></td>
    <td><?php echo $row["salary_expected"]; ?></td>
    <td><?php echo $row["salary_received"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
 </body>
</html>