<!DOCTYPE html>
<html>
<head>
	<title>Book Allocation Design</title>
	<style type="text/css">
		body{
			background-color: #991199;
			color: #abcbca;
		}
	</style>
</head>
<body>

	<center>
		<h1>To allocate book please enter essential information </h1><br><br>

		<form method="POST" action="backend_book_allocation.php">
			

			<label>Roll No : </label>
			<input type="number" name="roll" required placeholder="Enter Roll Number here"><br><br>


			<label>Book Id : </label>
			<input type="number" name="bookid" required placeholder="Enter Book Id here">
			<br><h5>To know Book Id with name please check View Book Option on Home page. <a href="view_book.php"> OR Click Here</a></h5>

			<br><br>

			<label>Your Name : </label>
			<input type="text" name="sname"  placeholder="Enter Your Name(Optional)">
			<br><br>

			<label>Book Name : </label>
			<input type="text" name="bname"  placeholder="Enter Book Name(Optional)">
			<br><h5>To know Book Id with name please check view book option on Home page. <a href="view_book.php"> OR Click Here</a></h5><br><br>

			<label>Borrow Date : </label>
			<input type="date" name="b_date" required placeholder="Enter today's date">
			<br><br>

			<label>Return Date: </label>
			<input type="date" name="r_date" required placeholder="Enter return date">
			<br><br>

			<button type="Submit">Submit</button>



		</form>
	</center>

</body>
</html>