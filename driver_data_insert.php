<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/driver_data_style.css">
  <div class="heading">
  <h1>Enter Driver Details</h1>
</div>
</head>
  <body> 
  <div class = "details">
	<form method="post" action="driver_data_process.php" class="form_driver">
	<p class="table">Id:
		<input type="text" name="driver_id" class = "input_block">
		<br></p>
		<p class="table">Name:
		<input type="text" name="driver_name" class = "input_block">
		<br></p>
		<p class="table">Age:
		<input type="number" name="age" class = "input_block">
		<br></p>
		<p class="table">Years of experience:
		<input type="number" name="years_of_experience" class = "input_block">
        <br></p>
        <p class="table">Mobile number:
		<input type="number" name="mobile_number" class = "input_block">
		<br></p>
		<p class="table">Vehicle id:
		<input type="text" name="vehicle_id" class = "input_block">
		<br></p>
		<p class="table">Transfer status:
		<select id="status" name="status">
           <option value="yes">Yes</option>
           <option value="no">No</option>
        </select>
		<br></p>
		<p class="table">Transfer From:
		<select id="location_from" name="location_from">
           <option value="hyderabad">Hyderabad</option>
		   <option value="bangalore">Bangalore</option>
		   <option value="chennai">Chennai</option>
		   <option value="tirupathi">Tirupathi</option>
        </select>
		<br></p>
		<p class="table">Transfer To:
		<select id="location_to" name="location_to">
           <option value="hyderabad">Hyderabad</option>
		   <option value="bangalore">Bangalore</option>
		   <option value="chennai">Chennai</option>
		   <option value="tirupathi">Tirupathi</option>
        </select>
		<br></p>
		<p class="table">Attendance:
		<input type="number" name="attendance" class = "input_block">
		<br></p>
		<p class="table">Salary Expected:
		<input type="number" name="salary_expected" class = "input_block">
		<br></p>
		<br>
		<input type="submit" name="save" value="submit" class = "input_submit">
		<br>
		<button class="button1" onclick= "retrieve()">Retrieve Data</button>
	</form>
	</div>
	<script>
	function retrieve() {
		window.open("http://localhost/sample/driver_retrieve_data.php");
}
	</script>
  </body>
</html>