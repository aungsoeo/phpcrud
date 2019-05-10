<?php 

	include "../config/dbconnect.php";
 
	$roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];




    $result = mysqli_query($conn, "INSERT INTO stddb(rollno,name,email,phone,address) VALUES('$roll_no','$name','$email','$phone','$address')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";