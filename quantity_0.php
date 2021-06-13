<!DOCTYPE html>
<html>
<head>
	<title>View by ID</title>
	<style type="text/css">
		body{
			background-color: #2299ff;
			color: #ffff00;
		}
	</style>
</head>
<body>
<center>

<h2>List Of Books which are not available NOW!!</h2>
<h2>Please Visit After some days.</h2>

<?php



$username="root";
$database="library management";
$password="";
$hostname="localhost";

$conn=mysqli_connect($hostname,$username,$password,$database);

$query_book="SELECT * FROM book_table WHERE Quantity=0";
$res_book=mysqli_query($conn,$query_book);


echo "<table border=5> <tr> <th>Book Name</th>  <th>Quantity</th>  <th>Book ID</th>   <th>Author</th>  <th>Publications</th> </tr>";

while($row=mysqli_fetch_array($res_book)){
 echo "<tr>";

  echo "<td>" . $row['Book_Name'] . "</td>";

  echo "<td>" . $row['Quantity'] . "</td>";

  echo "<td>" . $row['Book_ID'] . "</td>";

  echo "<td>" . $row['Author'] . "</td>";


  echo "<td>" .$row['Publication']. "</td>";

  echo "</tr>";
	
}

echo "</table>";


?>
</center>
</body>
</html>