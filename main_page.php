<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/main_page_style.css">
  <div class="heading">
  <h1>Users Available</h1>
</div>
</head>
  <body> 
  <div class = "details">
      <button class ="button1" onclick = "adminFunc()">Admin Login Block</button><br>
      <button class ="button1"onclick = "headFunc()">Shophead Login Block</button><br>
      <button class ="button1" onclick = "employeeFunc()">Employee Login Block</button><br>
</div>
<script>
    function adminFunc() {
		window.open("http://localhost/sample/admin_login_main.php");
}
function headFunc() {
		window.open("http://localhost/sample/head_login_main.php");
}
function employeeFunc() {
		window.open("http://localhost/sample/employee_login_main.php");
}
    </script>
  </body>
</html>