<?php
include_once 'vehicle_retrieve_database.php';
$result = mysqli_query($conn,"SELECT * FROM vehicle_service_details");
?>
<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/vehicle_retrieve_style1.css">
  <div class="heading">
  <h1>View Vehicle Service Details</h1>
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
    <td><b>Truck Id</b></td>
    <td><b>Truck Model</b></td>
    <td><b>Driver Id</b></td>
    <td><b>Inspection Result</b></td>
    <td><b>Maintanance Result</b></td>
    <td><b>Service Type</b></td>
    <td><b>Delete</b></td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["Truck_Id"]; ?></td>
    <td><?php echo $row["Truck_Model"]; ?></td>
    <td><?php echo $row["Driver_Id"]; ?></td>
    <td><?php echo $row["Inspection_Result"]; ?></td>
    <td><?php echo $row["Maintanance_Result"]; ?></td>
    <td><?php echo $row["Service_Type"]; ?></td>
    <td><a href="delete_service.php?id=<?php echo $row['Truck_Id']; ?>" name = 'delete'>Delete</a></td>
    
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