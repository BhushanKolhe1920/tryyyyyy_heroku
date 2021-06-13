<!DOCTYPE html>
<html>
<head>
	<title>View Students By Roll</title>
	<style type="text/css">
		body{


		background-color: #fedcba;
		color: #ff0000;
	}
	</style>
</head>
<body>
<h3><a href="stud_index.php">Go To Home Page</a></h3>
<center><h2>Welcome to Students section<br>Please eneter roll number of student to view his details</h2>
	<form method='POST' action="#">
<input type="number" name="roll" required  placeholder="eneter roll num here">
<button type="submit">Submit</button><br><br>
</form>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	

$roll = $_POST['roll'];

$username="root";
$database="library management";
$password="";
$hostname="localhost";

$conn=mysqli_connect($hostname,$username,$password,$database);

$query_stud="SELECT * FROM student_table WHERE Roll_No=$roll";
$res_stud=mysqli_query($conn,$query_stud);


echo "<br>";


echo "<table border=50> <tr> <th>Student Name</th>  <th>Roll No.</th>  <th>Email ID</th>   <th>Phone No.</th>  <th>Gender</th> <th>Branch</th> <th>Semester</th></tr>";

while($row=mysqli_fetch_array($res_stud)){
	 echo "<tr>";

  echo "<td>" . $row['Name'] . "</td>";

  echo "<td>" . $row['Roll_No'] . "</td>";

  echo "<td>" . $row['Mail'] . "</td>";

  echo "<td>" . $row['Phone'] . "</td>";


  echo "<td>" .$row['Gender']. "</td>";
  echo "<td>". $row['Branch']."</td>";
  echo "<td>". $row['Semester']."</td>";

  echo "</tr>";
}

echo "</table>";
}

?>


</center>
</body>
</html>