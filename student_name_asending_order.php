<!DOCTYPE html>
<html>
<head>
	<title>View Students</title>
	<style type="text/css">
		body{


		background-color: #fedcba;
		color: #ff0000;
	}
	</style>
</head>
<body>
<center>
	<h3>Choose Option to list table in asending order</h3>


</center>
<center><h2>Welcome to library management System. <br>Here is the list of students.</h2>

<?php
$username="root";
$database="library management";
$password="";
$hostname="localhost";

$conn=mysqli_connect($hostname,$username,$password,$database);

$query_stud="SELECT * FROM student_table ORDER BY Name";
$res_stud=mysqli_query($conn,$query_stud);

echo "<table border=50> <tr> <th>Name</th>  <th>Roll No.</th>  <th>Semester</th>   <th>Branch</th>  <th>EMail ID</th> <th>Phone</th> <th>Gender</th> </tr>";
echo "<br>";

while($row=mysqli_fetch_array($res_stud)){
	
	echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";

  echo "<td>" . $row['Roll_No'] . "</td>";

  echo "<td>" . $row['Semester'] . "</td>";

  echo "<td>" . $row['Branch'] . "</td>";


  echo "<td>" .$row['Mail']. "</td>";

  echo "<td>".$row['Phone']."</td>";
  echo "<td>".$row['Gender']."</td>";

  echo "</tr>";

}


?>
</center>
<br><br><br><br><br>

<h2>Here is the list of Books of library</h2>
<?php
$quan ='Quantity';
$query_book="SELECT * FROM book_table ORDER BY $quan";
$res_book=mysqli_query($conn,$query_book);

echo "Book Id ---------- Book Name ----------- Author ----------- Publication ---------- Quantity";
echo "<br>";

while($row=mysqli_fetch_array($res_book)){

	echo $row['Book_ID']."-----------".$row['Book_Name']."----------".$row['Author']."----------".$row['Publication']."----------".$row['Quantity']."<br>";
}

?>

</center>
</body>
</html>