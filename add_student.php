<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

$username="root";
$hostname="localhost";
$password="";
$database="library management";

$conn=mysqli_connect($hostname,$username,$password,$database);


$name=$_POST['name'];
$branch=$_POST['branch'];
$roll=$_POST['roll'];
$email=$_POST['mailid'];
$semester=$_POST['semester'];

$phone=$_POST['phone'];

$gender=$_POST['gender'];
$query="INSERT INTO student_table(Roll_No,Name,Mail,Phone,Gender,Branch,Semester) VALUES('$roll','$name','$email','$phone','$gender','$branch','$semester')";


$res=mysqli_query($conn,$query);


if($res){
	echo "<center>";
	echo "<h1>Student Detail Inserted<\h1>";
	echo "</center>";
}

else{
	echo "<center>";
echo "Data Not Inserted Please Check your code";
echo  "Following Reasons may affect data not insertion :";
echo " 1. Check Your Server"."<br>"."2. Roll No. Is unique For each student. Duplicate values may affect database."."<br>"."3.Check Your Code.";
echo "</center>";
}
}
?>