<!DOCTYPE html>
<html>
<head>
	<title>Book Section</title>

	<style type="text/css">
		body{
			color: brown;
			background-color: #dfffff;
		}
	</style>
</head>
<body>

	<center>
		<h1>Add new Book</h1>
		<h2>Enter Book Details here</h2>
		<form method="POST" action="add_book.php">

			<label>Book Id:</label>
			
			<input type="number" name="bookid" required placeholder="Enter Book ID">
			<br><br>

			<label>Book Name :</label>
			<input type="text" name=name required placeholder="Enter Book Name" ><br><br>

			<label>Autor Name:</label>
			<input type="text" name="a_name" required placeholder="Enter author name"><br><br>

			<label>Quantity :</label>
			<input type="number" name="quan" required placeholder="Enter quantity"><br><br>
			

			<label>Publications: </label>
			<input type="text" name="pub" required placeholder="Enter publications">
			<br><br>
			
			
			<button type="Submit">Submit</button>
		</form>

	</center>

</body>
</html>
