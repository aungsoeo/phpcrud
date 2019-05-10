<<<<<<< HEAD
<?php
include "../config/dbconnect.php";
$id = $_GET['id'];
$reult = mysqli_query($conn, "DELETE FROM stddb WHERE id=$id");
header("Location: http://localhost/phpcrud/");
=======
<?php 

	//including the database connection file
	include "../config/dbconnect.php";
	 
	//getting id of the data from url
	$id = $_GET['id'];
	 
	//deleting the row from table
	$result = mysqli_query($conn, "DELETE FROM students WHERE id=$id");
	 
	//redirecting to the display page (index.php in our case)
	header("Location: http://localhost:8888/phpcrud/");
 ?>
>>>>>>> 8a726d756047be1ce7991aae18280fd8934c362c
