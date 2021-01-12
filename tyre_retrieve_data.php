<?php
include_once 'vehicle_retrieve_database.php';
$result = mysqli_query($conn,"SELECT * FROM tyre_details");
?>
<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/vehicle_retrieve_style1.css">
  <div class="heading">
  <h1>View Tyre Details</h1>
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
<div class = "details">
  <table>
  
  <tr>
    <td><b>Tyre Id</b></td>
    <td><b>Tyre Status</b></td>
    <td><b>Odometer Reading</b></td>
    <td><b>Distance Covered</b></td>
    <td><b>Cost Per Km.</b></td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["tyre_id"]; ?></td>
    <td><?php echo $row["tyre_status"]; ?></td>
    <td><?php echo $row["odometer"]; ?></td>
    <td><?php echo $row["distance"]; ?></td>
    <td><?php echo $row["cost"]; ?></td>
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
</div>
 </body>
</html>