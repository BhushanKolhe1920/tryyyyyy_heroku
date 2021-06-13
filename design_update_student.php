
<!DOCTYPE html>
<html>  
<head>
	<title>Update student info</title>
	<style type="text/css">
		body{
			background-color: #ffaaff;
		}
	</style>
</head>
<body>
<center>
	<h2>To update students information check table and update values using form.</h2>
	

     
	<?php

	$conn=mysqli_connect('localhost','root','','library management');

	$query1="SELECT * FROM student_table";
	$res1=mysqli_query($conn,$query1);

echo "<h2>You can only update data which is present in following table</h2>";


echo "<table border=5><tr><th>Roll No. </th><th>Student Name</th><th>Branch</th><th>Email ID</th><th>Semester</th><th>Phone No.</th><th>Gender</th>";

while($row=mysqli_fetch_array($res1)){

echo "<tr>";
echo "<td>".$row['Roll_No']."</td>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['Branch']."</td>";
echo "<td>".$row['Mail']."</td>";
echo "<td>".$row['Semester']."</td>";
echo "<td>".$row['Phone']."</td>";
echo "<td>".$row['Gender']."</td>";
echo "</tr>";

}

echo "</table>";



	?>
	<h2>Please add updated student info. [Roll No. Cannot be changed]</h2>
<br><br>
	<form method="POST"  action="update_student.php">
    <label>Roll No. (Of whose data is to be update)</label>
    <input type="number" name="roll" required placeholder="Enter roll no."><br><br>
    <label>Name : </label>
    
<input type="text" name="name" required placeholder="In small letters only">
			<br><br>
			
			<label>Branch:</label>
			<input type="text" name="branch" required placeholder="Enter yor branch"><br><br>
			

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
<br><br>


    <button type="Submit">
    	Submit 
    	
    </button>

	</form>
</center>
</body>
</html>