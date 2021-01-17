<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/tyre_data_style1.css">
  <div class="heading">
  <h1>Enter Tyre Details</h1>
</div>
</head>
  <body> 
  <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class = "content">
  <div class = "details">
	<form method="post" action="tyre_data_process.php">
		<p class="table">Tyre Id:<br>
		<input type="text" name="tyre_id" class = "input_block">
		<br></p><br>
        <p class="table">Tyre(R/I):
		<select id="status" name="tyre_status" class = "op">
           <option value="Removal" name = "Removal">Removal</option>
           <option value="Insertion" name = "Insertion">Insertion</option>
        </select>
		<br></p><br>
        <p class="table">Odometer:<br>
		<input type="number" name="odometer" class = "input_block">
		<br></p><br>
        <p class="table">Distance:<br>
		<input type="number" name="distance" class = "input_block">
		<br></p><br>
        <p class="table">Cost per km:<br>
		<input type="number" name="cost" class = "input_block">
		<br></p><br>
		<input type="submit" name="save" value="submit" class = "input_submit">
		<br>
		<button class="button1" onclick= "retrieve()">Retrieve Data</button>
	</form>
	</div>
	
<script>
	function retrieve() {
		window.open("tyre_retrieve_data_admin.php");
}
	</script>
	</div>

  </body>
</html>