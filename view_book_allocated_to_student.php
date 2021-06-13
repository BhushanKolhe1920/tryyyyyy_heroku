<!DOCTYPE html>
<html>
<head>
	<title>Allocated Books</title>
	<style type="text/css">
		body{
			background-color: #870189;
			color: #a9f9d6;
		}
	</style>
</head>
<body>
<center>
	
	<h3>To Check which all books a particular students have borrowed enter roll number</h3>
	<form method="POST" action="#">
	<label>Roll No : </label>
	<input type="number" name="roll" required placeholder="Enter Roll No."><br><br>

	<button type="Submit">Submit</button><br><br><br>
</form>

	<?php

		if($_SERVER['REQUEST_METHOD']=='POST'){

			$roll=$_POST['roll'];

			$username="root";
$password="";
$hostname="localhost";
$database="library management";


$conn=mysqli_connect($hostname,$username,$password,$database);

$query="SELECT * FROM book_student WHERE Roll_No=$roll";

$res=mysqli_query($conn,$query);



echo "<table border=5><tr><th>Student Name </th><th>Book Names </th><th>Book Id</th></tr>";

while($row=mysqli_fetch_array($res)){

echo "<tr>";

echo "<td>".$row['Name_Book']."</td>";
echo "<td>".$row['Name_Stud']."</td>";
echo "<td>".$row['Book_ID']."</td>";


echo "</tr>";

		}
		echo "</table>";
	}

	?>


</center>
</body>
</html>