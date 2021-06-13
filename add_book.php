<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

$username="root";
$hostname="localhost";
$password="";
$database="library management";

$conn=mysqli_connect($hostname,$username,$password,$database);


$name=$_POST['name'];

$bookid=$_POST['bookid'];

$a_name=$_POST['a_name'];

$quan=$_POST['quan'];

$publication=$_POST['pub'];


$query="INSERT INTO book_table(Book_Name,Author,Publication,Quantity,Book_ID) VALUES('$name','$a_name','$publication','$quan','$bookid')";


$res=mysqli_query($conn,$query);


if($res){
	echo "<center>";
	echo "<h1>Book Detail Inserted<\h1>";
	echo "</center>";
}

else{
	echo "<center>";
echo "Data Not Inserted Please Check your code";
echo  "Following Reasons may affect data not insertion :";
echo " 1. Check Your Server"."<br>"."2. Book Id. Is unique For each book. Duplicate values may affect database."."<br>"."3.Check Your Code.";
echo "</center>";
}
}
?>