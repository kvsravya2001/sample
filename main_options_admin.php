<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/main_page_style.css">
  <div class="heading">
  <h1>List</h1>
</div>
</head>
  <body> 
  <div class = "details">
      <button class ="button1" onclick = "adminFunc()">Vehicle Details Insert</button>
      <button class ="button1" onclick = "adminFuncV()">Vehicle Details View</button><br>
      <button class ="button1"onclick = "headFuncV()">Driver Details Insert</button>
      <button class ="button1"onclick = "headFunc()">Driver Details View</button><br>
      <button class ="button1" onclick = "employeeFunc()">Vehicle Servicing<br> Details Insert</button>
      <button class ="button1" onclick = "employeeFuncV()">Vehicle Servicing<br> Details View</button><br>
      <button class ="button1"onclick = "headFuncVV()">Tyre Details Insert</button>
      <button class ="button1"onclick = "headFuncVVV()">Tyre Details View</button><br>
      <button class ="button1"onclick = "ins()">Tyre Repair Insert</button>
      <button class ="button1"onclick = "insV()">Tyre Repair View</button><br>
</div>
<script>
    function adminFunc() {
		window.open("http://localhost/sample/vehicle_data_insert.php");
}
function adminFuncV() {
		window.open("http://localhost/sample/vehicle_retrive_data_admin.php");
}
function headFuncV() {
		window.open("http://localhost/sample/driver_data_insert.php");
}
function headFunc() {
		window.open("http://localhost/sample/driver_retrieve_data.php");
}
function employeeFunc() {
		window.open("http://localhost/sample/service_data_insert.php");
}
function employeeFuncV() {
		window.open("http://localhost/sample/service_retrieve_data.php");
}
function headFuncVV() {
		window.open("http://localhost/sample/tyre_data_insert.php");
}
function headFuncVVV() {
		window.open("http://localhost/sample/tyre_retrieve_data.php");
}
function ins() {
		window.open("http://localhost/sample/tyre_repair_data_insert.php");
}
function insV() {
		window.open("http://localhost/sample/tyre_repair_retrieve_data.php");
}
    </script>
  </body>
</html>