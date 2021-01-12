<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/vehicle_data_style1.css">
  <div class="heading">
  <h1>Enter Vehicle Details</h1>
</div>
</head>
  <body> 
  <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class = "content">
  <div class = "details">
	<form method="post" action="vehicle_data_process.php">
		<p class="table">Manufacturing Id:<br>
		<input type="text" name="manufacturing_id" class = "input_block">
		<br></p>
		<p class="table">Truck Model:<br>
		<input type="text" name="truck_model" class = "input_block">
		<br></p>
		<p class="table">No. Of Wheels:<br>
		<input type="number" name="no_of_wheels" class = "input_block">
		<br></p>
		<br>
		<input type="submit" name="save" value="submit" class = "input_submit">
		<br>
		<button class="button1" onclick= "retrieve()">Retrieve Data</button>
	</form>
	</div>
	
<script>
	function retrieve() {
		window.open("vehicle_retrive_data.php");
}
	</script>
</div>
  </body>
</html>