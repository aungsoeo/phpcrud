<?php 

	include "../config/dbconnect.php";
 
	$roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];




    $result = mysqli_query($conn, "INSERT INTO students(roll_no,name,email,address,phone) VALUES('$roll_no','$name','$email','$address','$phone')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
       header("Location: http://localhost:8888/phpcrud/");