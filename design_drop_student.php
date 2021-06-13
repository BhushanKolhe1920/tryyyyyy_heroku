
<!DOCTYPE html>
<html>
<head>
	<title>Delete Student Detail</title>

	<style type="text/css">
		body{
		color: blue;
		background-color:#dfffff;
	}
	</style>
</head>
<body>

	<center>

		<h2>To delete student detail enter roll number here {Roll No is unique for everyone}</h2>
		<form method="POST" action="drop_student.php">
			<label>Roll No: </label>
			<input type="number" name="roll" required placeholder="Enter Roll Here"><br><br>
			<button type="Submit">Submit</button>
		</form>
	</center>

</body>
</html>