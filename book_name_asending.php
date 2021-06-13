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

$query_book="SELECT * FROM book_table ORDER BY DESC";
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