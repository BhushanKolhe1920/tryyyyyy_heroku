<!DOCTYPE html>
<html>
<head>
	<title>Book Quantity</title>
	<style type="text/css">
		body{
			background-color: #bacbde;
			color: #389845;
		}
	</style>
</head>
<body>
	<center>
		<h1>Here is the list of book according to quantity of books</h1>

		<br><br>

		
<?php
$username="root";
$password="";
$hostname="localhost";
$database="library management";
$conn=mysqli_connect($hostname,$username,$password,$database);

$query="SELECT * FROM book_table ORDER BY Quantity";

$res=mysqli_query($conn,$query);

echo "<table border=50> <tr> <th>Book Name</th>  <th>Quantity</th>  <th>Book ID</th>   <th>Author</th>  <th>Publications</th> </tr>";

while($row=mysqli_fetch_array($res)){


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


<br><br><br>

<h1>Here is the list of book according to book name</h1>


<?php

$query="SELECT * FROM book_table ORDER BY Book_Name";

$res=mysqli_query($conn,$query);

echo "<table border=50> <tr> <th>Book Name</th>  <th>Quantity</th>  <th>Book ID</th>   <th>Author</th>  <th>Publications</th> </tr>";

while($row=mysqli_fetch_array($res)){


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