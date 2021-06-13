<!DOCTYPE html>
<html>
<head>
	<title>Update Books Info.</title>
	<style type="text/css">
		body
		{
			background-color: #565656;
			color: white;
		}
	</style>
</head>
<body>
<center>
	<h1>To Update Book Information;Please enter book id of particular book.</h1>
<form method="POST" action="#">
	<h4>Enter book id to update its information</h4>
	<label>Boom ID :</label>
	<input type="number" name="bookid" required placeholder="Enter book id here"><br><br>

	<label>Book Name : </label>
	<input type="text" name="name" required placeholder="Enter book name"><br><br>

	<label>Author :</label>
	<input type="text" name="author" required placeholder="Author name"><br><br>

	<label>Publications : </label>
	<input type="text" name="pub" required placeholder="Publications"><br><br>

	<label>Quantity</label>
    <input type="number" name="quan" required placeholder="Quantity"><br><br>

    <button type="Submit">Submit</button><br><br>
    </form>


    <?php
    			if($_SERVER['REQUEST_METHOD']=='POST'){
    				$username="root";
    				$hostname="localhost";
    				$password="";
    				$database="library management";

    				$bookid=$_POST['bookid'];
    				$name=$_POST['name'];
    				$author=$_POST['author'];
    				$pub=$_POST['pub'];
    				$quan=$_POST['quan'];

    				$conn=mysqli_connect($hostname,$username,$password,$database);

    				$query="UPDATE book_table SET Book_Name='$name', Author='$author' , Publication='$pub' , Quantity='$quan' WHERE Book_ID=$bookid";

    				$res=mysqli_query($conn,$query);

    				if($res){
    					echo "Updated Succesfully";
    				}

    				else{
    					echo " Not Upadted ";
    				}
    			}

    ?>




</center>
</body>
</html>