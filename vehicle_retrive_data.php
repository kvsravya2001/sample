<?php
include_once 'vehicle_retrieve_database.php';
$result = mysqli_query($conn,"SELECT * FROM vehicle_details");
?>
<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/vehicle_retrieve_style.css">
  <div class="heading">
  <h1>View Vehicle Details</h1>
</div>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class = "details">
  <table>
  
  <tr>
    <td><b>Manufacturing Id</b></td>
    <td><b>Truck Model</b></td>
    <td><b>Number of wheels</b></td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["manufacturing_id"]; ?></td>
    <td><?php echo $row["truck_model"]; ?></td>
    <td><?php echo $row["no_of_wheels"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>