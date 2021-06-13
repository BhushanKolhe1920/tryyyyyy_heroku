
<!DOCTYPE html>
<html>
<head>
	<title>Total Borrowed Books</title>
	<style type="text/css">
		body{
			background-color: #019285;
			color: #ffffff;
		}
	</style>
</head>
<body>
<br><br><br>

	<center>
		<h2>Enter information to check number of particular book borrowed by student</h2><br><br>
		<form method="POST" action="#">

			<label>Book Id : </label>
			<input type="number" name="bookid" required placeholder="Enter Book ID">
			<br><br>

			<label>Book Name : </label>
			<input type="text" name="bname" placeholder="Enter Book Name(Optional)">
			<br><h5>To check Book ID With Book Name Click ---> <a href="view_book.php">Here</a></h5>
			<br>

			<button type="Submit">Check </button>

		</form>
		<br><br>



		<?php

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$bookid=$_POST['bookid'];
				$bname=$_POST['bname'];

				$i=0;

				$hostname="localhost";
				$username="root";
				$password="";
				$database="library management";

				$conn=mysqli_connect($hostname,$username,$password,$database);

				$query="SELECT * FROM book_student WHERE Book_ID=$bookid";

				$res=mysqli_query($conn,$query);
				echo "<table border=5><tr><th>Students Name </th><th>Roll No.</th></tr>";


				while($row=mysqli_fetch_array($res)){
					$i++;

					echo "<tr>";
					echo "<td>".$row['Name_Stud']."</td>";
					echo "<td>".$row['Roll_No']."</td>";
					echo "</tr>";

				}

				echo "<h3>Total Number of Borrowed ".$bname."book id= ".$bookid." are/is ";
				echo " ".$i."</h3>";
			}

		?>
	</center>

</body>
</html>