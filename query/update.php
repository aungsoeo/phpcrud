<?php 

include "../config/dbconnect.php";
if(isset($_POST['update']))
{
   $id = $_POST['id'];
   $rollno = $_POST['rollno'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
// echo $rollno;
// echo $name;
// echo $email;
// echo $phone;
// echo $address;



$result = mysqli_query($conn, " UPDATE stddb SET rollno='$rollno',name='$name',email='$email',phone='$phone',address='$address' WHERE id=$id");

header("Location: http://localhost/phpcrud/");
}
?>