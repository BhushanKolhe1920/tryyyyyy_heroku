<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

	$username="root";
	$password="";
	$database="library management";
	$hostname="localhost";
	$conn=mysqli_connect($hostname,$username,$password,$database);


$name=$_POST['name'];
$branch=$_POST['branch'];
$roll=$_POST['roll'];
$email=$_POST['mailid'];
$semester=$_POST['semester'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$query="UPDATE student_table SET Name='$name',Mail='$email',Phone='$phone',Gender='$gender',Branch='$branch',Semester='semester' WHERE Roll_No='$roll'";
$res=mysqli_query($conn,$query);


if($res){

	echo "<center>Updated Succesfully</center>";
}

else{

	echo "Not updated";
}

}

?>