<!DOCTYPE html>
<html>
<head>
	<title>Students Section</title>

	<style type="text/css">
		body{
			color: brown;
			background-color: #dfffff;
		}
	</style>
</head>
<body>

	<center>
		<h1>Add new Students</h1>
		<h2>Enter Your Details here</h2>
		<form method="POST" action="add_student.php">

			<label>Your Name:</label>
			
			<input type="text" name="name" required placeholder="In small letters only">
			<br><br>
			<label>Roll No.:</label>
			<input type="number" name="roll" required placeholder="Enter Roll No."><br><br>
			<label>Branch:</label>
			<input type="text" name="branch" required placeholder="Enter yor brach"><br><br>
			<label>Semester:</label>
			<input type="number" name="semester" required placeholder="Enter your semester"><br><br>
			<label>Email ID:</label>

			<input type="email" name="mailid" required placeholder="Enter Email Id"><br><br>
			<label>Phone no.:</label>
			<input type="number" name="phone" required placeholder="Enter contact no."><br><br>
			

			<label>Gender :  							</label>
			<select name="gender" id="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option></select>
<br><br>
			<button type="Submit">Submit</button>

		</form>

	</center>

</body>
</html>
