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
	<form method="post" action="tyre_repair_data_process.php">
		<p class="table">Pysical Tyre Id:
		<input type="text" name="pysical_tyre_id" class = "input_block">
		<br></p><br>
        <p class="table">NSD value:
		<input type="number" name="nsd" class = "input_block">
		<br></p><br>
		<input type="submit" name="save" value="submit" class = "input_submit">
		<br>
		<button class="button1" onclick= "retrieve()">Retrieve Data</button>
	</form>
	</div>
	
<script>
	function retrieve() {
		window.open("tyre_repair_retrieve_data_admin.php");
}
	</script>
</div>
  </body>
</html>