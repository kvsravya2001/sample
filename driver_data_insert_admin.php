<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Design/driver_data_style1.css">
  <div class="heading">
  <h1>Enter Driver Details</h1>
</div>
</head>
  <body> 
  <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class = "content">
  <div class = "details">
	<form method="post" action="driver_data_process.php" class="form_driver">
	<p class="table">Id:
		<input type="text" name="driver_id" class = "input_block">
		<br></p><br>
		<p class="table">Name:
		<input type="text" name="driver_name" class = "input_block">
		<br></p><br>
		<p class="table">Age:
		<input type="number" name="age" class = "input_block">
		<br></p><br>
		<p class="table">Experience:
		<input type="number" name="years_of_experience" class = "input_block">
        <br></p><br>
        <p class="table">Mobile:
		<input type="number" name="mobile_number" class = "input_block">
		<br></p><br>
		<p class="table">Vehicle id:
		<input type="text" name="vehicle_id" class = "input_block">
		<br></p><br>
		<p class="table">Transfer status:
		<select id="status" name="status"  class = "op">
           <option value="yes">Yes</option>
           <option value="no">No</option>
        </select>
		<br></p><br>
		<p class="table">Transfer From:
		<select id="location_from" name="location_from" class = "op">
           <option value="hyderabad">Hyderabad</option>
		   <option value="bangalore">Bangalore</option>
		   <option value="chennai">Chennai</option>
		   <option value="tirupathi">Tirupathi</option>
        </select>
		<br></p><br>
		<p class="table">Transfer To:
		<select id="location_to" name="location_to"  class = "op">
           <option value="hyderabad">Hyderabad</option>
		   <option value="bangalore">Bangalore</option>
		   <option value="chennai">Chennai</option>
		   <option value="tirupathi">Tirupathi</option>
        </select>
		<br></p><br>
		<p class="table">Attendance:
		<input type="number" name="attendance" class = "input_block">
		<br></p><br>
		<p class="table">Salary:
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
		window.open("driver_retrieve_data_admin.php");
}
	</script>
	</div>
  </body>
</html>