<!DOCTYPE html>
<html>
<head>
	<title>Book Allocation Result</title>
	<style type="text/css">
		body{
			background-color: #454678;
			color: #ffffff;
		}
	</style>
</head>
<body>
	<br><br>

<center>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

	$roll=$_POST['roll'];
	$bookid=$_POST['bookid'];
	$b_date=$_POST['b_date'];
	$r_date=$_POST['r_date'];
	$bname=$_POST['bname'];
	$sname=$_POST['sname'];


	$username="root";
	$password="";
	$hostname="localhost";
	$database="library management";

	$conn=mysqli_connect($hostname,$username,$password,$database);

	$query1="INSERT INTO book_student VALUES('$roll','$bookid','$b_date','$r_date','$bname','$sname')";

	$query2="UPDATE book_table SET Quantity=Quantity-1 WHERE Book_ID=$bookid";

	$res1=mysqli_query($conn,$query1);
	$res2=mysqli_query($conn,$query2);

	if($res1 && $res2){
		echo "Book is allocated to You Succesfully.";
	}

	else{
		echo "Not allocated : Following reason may lead to disllocation : ";
		echo "<br>";
		echo "1.Books Are not available"."<br>"."2.You are not eligible"."<br>"."3.Check Your Server";
	}

}

?>
</center>
</body>
</html>