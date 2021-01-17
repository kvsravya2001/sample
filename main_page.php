<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/main_page_style.css">
  <div class="heading">
   <div class = "im">
  <img src="images/more options.png" alt="More options" class="dropbtn" onclick = "myFunction()">
</div> 
  <div id="myDropdown" class="dropdown-content">
    <a href="admin_login_main.php" class="admin">Admin</a>
    <a href="head_login_main.php" class = "admin">Shop Head</a>
    <a href="employee_login_main.php" class = "admin">Employee</a>
  </div>
</div>
</head>
  <body> 
  <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class = "main">
<div class="content" id = "man1">
  <h1>Hey There!</h1>
</div>
<div class = "man">
  <img src="images/man.png">
</div>
</div>
<script>
    function adminFunc() {
		window.open("admin_login_main.php");
}
function headFunc() {
		window.open("head_login_main.php");
}
function employeeFunc() {
		window.open("employee_login_main_i.php");
}
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
  </body>
</html>