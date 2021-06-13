
<!DOCTYPE html>
<html>
<head>
	<title>Delete Student Detail</title>

	<style type="text/css">
		body{
		color: blue;
		background-color:#dfffff;
	}
	</style>
</head>
<body>

	<center>

		<h2>To delete book  detail enter book id  / number here {Book ID is unique for each book}</h2>
		<form method="POST" action="drop_book.php">
			<label>Book ID:  </label>
			<input type="number" name="bookid" required placeholder="Enter Book ID "><br><br>
			<button type="Submit">Submit</button>
		</form>
	</center>

</body>
</html>