<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/main_page_style1.css">
  <div class="heading">
  <h1>List</h1>
</div>
</head>
  <body> 
  <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class = "content">
  <ul>
  <div class = "details">
    <div class = "wrap">
     <li style="--animation-order: 1;"> <button class ="button1" onclick = "adminFunc()">Vehicle Details Insert</button>
</div>
     <!-- <li style="--animation-order: 1;"><button class ="button1" onclick = "adminFuncV()">Vehicle Details View</button> -->
     <div class = "wrap">
     <li style="--animation-order: 2;"> <button class ="button1"onclick = "headFuncV()">Driver Details Insert</button>
</div>
     <!-- <li style="--animation-order: 2;"><button class ="button1"onclick = "headFunc()">Driver Details View</button> -->
     <div class = "wrap">
     <li style="--animation-order: 3;"> <button class ="button1" onclick = "employeeFunc()">Servicing Details Insert</button>
</div>
     <!-- <li style="--animation-order: 3;"><button class ="button1" onclick = "employeeFuncV()">Servicing Details View</button> -->
     <div class = "wrap">
      <li style="--animation-order: 4;"><button class ="button1"onclick = "headFuncVV()">Tyre Details Insert</button>
</div>
      <!-- <li style="--animation-order: 4;"><button class ="button1"onclick = "headFuncVVV()">Tyre Details View</button> -->
      <div class = "wrap">
     <li style="--animation-order: 5;"> <button class ="button1"onclick = "ins()">Tyre Repair Insert</button>
</div>
     <!-- <li style="--animation-order: 5;"> <button class ="button1"onclick = "insV()">Tyre Repair View</button> -->
</ul>
</div>
<script>
    function adminFunc() {
		window.open("vehicle_data_insert.php");
}
function adminFuncV() {
		window.open("vehicle_retrive_data.php");
}
function headFuncV() {
		window.open("driver_data_insert.php");
}
function headFunc() {
		window.open("driver_retrieve_data.php");
}
function employeeFunc() {
		window.open("service_data_insert.php");
}
function employeeFuncV() {
		window.open("service_retrieve_data.php");
}
function headFuncVV() {
		window.open("tyre_data_insert.php");
}
function headFuncVVV() {
		window.open("tyre_retrieve_data.php");
}
function ins() {
		window.open("tyre_repair_data_insert.php");
}
function insV() {
		window.open("tyre_repair_retrieve_data.php");
}
    </script>
    </div>
  </body>
</html>