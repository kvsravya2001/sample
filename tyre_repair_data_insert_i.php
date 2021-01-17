<?php
// include_once 'tyre_repair_retrieve_data_i.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/tr_data_style2.css">
  <div class="heading">
  <h1>Enter Tyre Repair Details</h1>
</div>
</head>
  <body> 
  <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class = "content">
  <div class = "details">
	<form method="post" action="tyre_repair_data_process_i.php">
    <!-- <p class="table">Enter your email:
		<input type="text" name="userid" class = "input_block" id = "uidi">
		<br></p><br> -->
		<p class="table">Pysical Tyre Id:
		<input type="text" name="pysical_tyre_id" class = "input_block">
		<br></p><br>
        <p class="table">NSD value:
		<input type="number" name="nsd" class = "input_block">
		<br></p><br>
		<input type="submit" name="save" value="submit" class = "input_submit" id = "savei" onclick ="addressFunction()">
		<br>
		<button class="button1" onclick= "retrieve()">Retrieve Data</button>
	</form>
	</div>
	
<script>
	function retrieve() {
		window.open("tyre_repair_retrieve_data_i.php");
}
	</script>
</div>
  </body>
</html>