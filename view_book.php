<!DOCTYPE html>
<html>
<head>
	<title>View by ID</title>
	<style type="text/css">
		body{
			background-color: #2299ff;
		}
	</style>
</head>
<body>
<center>

<h2>Welcome to books section of library View mode</h2><br>
<h2>Please choose Book Id to check book</h2>
<form method="POST" action="#">
<input type="number" name="bookid" required placeholder="Enter book id here">
<button type="Submit" >Submit</button>
<br><br><br>
</form>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

$username="root";
$database="library management";
$password="";
$hostname="localhost";

$conn=mysqli_connect($hostname,$username,$password,$database);

$bookid=$_POST['bookid'];
$query_book="SELECT * FROM book_table WHERE Book_ID=$bookid";
$res_book=mysqli_query($conn,$query_book);

echo "<table border=50> <tr> <th>Book Name</th>  <th>Quantity</th>  <th>Book ID</th>   <th>Author</th>  <th>Publications</th> </tr>";

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
}

?>
</center>
</body>
</html>