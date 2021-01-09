<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/vehicle_data_style.css">
  <div class="heading">
  <h1>Enter Tyre Details</h1>
</div>
</head>
  <body> 
  <div class = "details">
	<form method="post" action="tyre_data_process.php">
		<p class="table">Tyre Id:<br>
		<input type="text" name="tyre_id" class = "input_block">
		<br></p>
        <p class="table">Tyre removal or insertion:
		<select id="status" name="tyre_status">
           <option value="Removal" name = "Removal">Removal</option>
           <option value="Insertion" name = "Insertion">Insertion</option>
        </select>
		<br></p>
        <p class="table">Odometer Reading(only in case of removel):<br>
		<input type="number" name="odometer" class = "input_block">
		<br></p>
        <p class="table">Distance covered(only in case of insertion):<br>
		<input type="number" name="distance" class = "input_block">
		<br></p>
        <p class="table">Cost per km (only in case of insertion):<br>
		<input type="number" name="cost" class = "input_block">
		<br></p>
		<input type="submit" name="save" value="submit" class = "input_submit">
		<br>
		<button class="button1" onclick= "retrieve()">Retrieve Data</button>
	</form>
	</div>
	
<script>
	function retrieve() {
		window.open("http://localhost/sample/tyre_retrieve_data.php");
}
	</script>

  </body>
</html>