<?php
include_once 'vehicle_retrieve_database.php';
// include_once 'tyre_repair_data_process_i.php';
// include_once 'employee_login_php.php';
require("tyre_repair_data_process_i.php");
require("employee_login_php.php");

// $result = mysqli_query($conn,"SELECT * FROM tyre_repair_details INNER JOIN employee_register ON tyre_repair_details.userid = employee_register.email WHERE tyre_repair_details.userid = '$email'");

//$result = mysqli_query($conn,"SELECT tyre_repair_details.physical_tyre_id, tyre_repair_details.nsd FROM tyre_repair_details, employee_register WHERE tyre_repair_details.userid = employee_register.email");
// else{
   $result = mysqli_query($conn,"SELECT * FROM tyre_repair_details"); 
// }
?>
<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/vehicle_retrieve_style1.css">
  <div class="heading">
  <h1>View Vehicle Details</h1>
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
    <td><b>Physical Tyre Id</b></td>
    <td><b>NSD Value</b></td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["physical_tyre_id"]; ?></td>
    <td><?php echo $row["nsd"]; ?></td>
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
    echo "No result found ";
}
?>
</div>
<!-- <script> 
            function addressFunction() { 
                if (document.getElementById( 
                  "saveii").click()) { 
                    document.getElementById( 
                      "uida").value =  
                    document.getElementById( 
                      "uidi").value; 
                    
                    document.getElementById( 
                      "pida").value =  
                    document.getElementById( 
                      "pidi").value; 
                } else { 
                    document.getElementById( 
                      "uida").value = ""; 
                    document.getElementById( 
                      "pida").value = ""; 
                } 
            } 
        </script>  -->
 </body>
</html>