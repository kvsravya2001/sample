<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/vehicle_data_style.css">
  <div class="heading">
  <h1>Enter Tyre Repair Details</h1>
</div>
</head>
  <body> 
  <div class = "details">
	<form method="post" action="tyre_repair_data_process.php">
		<p class="table">Pysical Tyre Id:<br>
		<input type="text" name="pysical_tyre_id" class = "input_block">
		<br></p>
        <p class="table">NSD value:<br>
		<input type="number" name="nsd" class = "input_block">
		<br></p>
		<input type="submit" name="save" value="submit" class = "input_submit">
		<br>
		<button class="button1" onclick= "retrieve()">Retrieve Data</button>
	</form>
	</div>
	
<script>
	function retrieve() {
		window.open("http://localhost/sample/tyre_repair_retrieve_data.php");
}
	</script>

  </body>
</html>