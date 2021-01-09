<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/service_data_style.css">
  <div class="heading">
  <h1>Enter Driver Details</h1>
</div>
</head>
  <body> 
  <div class = "details">
	<form method="post" action="service_data_process.php" class="form_driver">
	<p class="table">Truck Id:
		<input type="text" name="truck_id" class = "input_block">
		<br></p>
		<p class="table">Truck Model:
		<input type="text" name="truck_model" class = "input_block">
        <br></p>
        <p class="table">Driver Id:
		<input type="text" name="driver_id" class = "input_block">
		<br></p>
		<p class="table">Inspection Result:
		<select id="status" name="inspection">
           <option value="outstanding">Outstanding</option>
           <option value="excellent">Excellent</option>
           <option value="satisfactory">Satisfactory</option>
           <option value="belowAverage">Below Average</option>
           <option value="poor">Poor</option>
        </select>
		<br></p>
		<p class="table">Maintanance Result:
		<select id="status" name="maintanance">
           <option value="outstanding">Outstanding</option>
           <option value="excellent">Excellent</option>
           <option value="satisfactory">Satisfactory</option>
           <option value="belowAverage">Below Average</option>
           <option value="poor">Poor</option>
        </select>
		<br></p>
		<p class="table">Service Type:
		<select id="location_to" name="service_type">
           <option value="inhouse">In House</option>
		   <option value="outside">Outside</option>
        </select>
		<br></p>
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
  </body>
</html>