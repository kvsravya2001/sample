<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/service_data_style1.css">
  <div class="heading">
  <h1>Enter Vehicle Service Details</h1>
</div>
</head>
  <body> 
  <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class = "content">
  <div class = "details">
	<form method="post" action="service_data_process.php" class="form_driver">
	<p class="table">Id:
		<input type="text" name="truck_id" class = "input_block">
		<br></p><br>
		<p class="table">Model:
		<input type="text" name="truck_model" class = "input_block">
        <br></p><br>
        <p class="table">Driver Id:
		<input type="text" name="driver_id" class = "input_block">
		<br></p><br>
		<p class="table">Inspection:
		<select id="status" name="inspection" class="op">
           <option value="outstanding">Outstanding</option>
           <option value="excellent">Excellent</option>
           <option value="satisfactory">Satisfactory</option>
           <option value="belowAverage">Below Average</option>
           <option value="poor">Poor</option>
        </select>
		<br></p><br>
		<p class="table">Maintanance:
		<select id="status" name="maintanance" class="op">
           <option value="outstanding">Outstanding</option>
           <option value="excellent">Excellent</option>
           <option value="satisfactory">Satisfactory</option>
           <option value="belowAverage">Below Average</option>
           <option value="poor">Poor</option>
        </select>
		<br></p><br>
		<p class="table">Service:
		<select id="location_to" name="service_type" class="op">
           <option value="inhouse">In House</option>
		   <option value="outside">Outside</option>
        </select>
		<br></p><br>
		<input type="submit" name="save" value="submit" class = "input_submit">
		<br>
		<button class="button1" onclick= "retrieve()">Retrieve Data</button>
	</form>
	</div>
	<script>
	function retrieve() {
		window.open("http://localhost/sample/service_retrieve_data.php");
}
	</script>
	</div>
  </body>
</html>