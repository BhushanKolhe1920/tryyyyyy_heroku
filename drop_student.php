<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

$username="root";
$password="";
$hostname="localhost";
$database="library management";


$conn=mysqli_connect($hostname,$username,$password,$database);


$roll = $_POST['roll'];

$query="DELETE from student_table Where Roll_No='$roll'";

$res=mysqli_query($conn,$query);

if($res){
	echo "Student Of Roll No .".$roll;
	echo " is deleted";
}
else 
	echo "Not deleted";


}

?>