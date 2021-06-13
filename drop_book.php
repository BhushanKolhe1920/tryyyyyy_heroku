<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

$username="root";
$password="";
$hostname="localhost";
$database="library management";


$conn=mysqli_connect($hostname,$username,$password,$database);


$bookid = $_POST['bookid'];

$query="DELETE from book_table Where Book_ID='$bookid'";

$res=mysqli_query($conn,$query);

if($res){
	echo "Book Of Book ID .".$bookid;
	echo " is deleted";
}
else 
	echo "Not deleted";


}

?>