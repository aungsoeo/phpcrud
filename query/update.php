<<<<<<< HEAD
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
=======
<?php
// including the database connection file
    include "../config/dbconnect.php";
     
    if(isset($_POST['update']))
    {    
        $id = $_POST['id'];
        
        $roll_no = $_POST['roll_no'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];  


        // echo "ID ".$id;
        // echo "<br>";

        // echo "ROLL NO ". $roll_no;
        // echo "<br>";

        // echo $name;
        // echo "<br>";

        // echo $email;
        // echo "<br>";

        // echo $address;
        // echo "<br>";

        // echo $phone;
        // echo "<br>";

        // exit;


        
        //updating the table
        $result = mysqli_query($conn, "UPDATE students SET roll_no='$roll_no',name='$name',email='$email',address='$address',phone='$phone' WHERE id=$id");
        
        //redirectig to index.php
        header("Location: http://localhost:8888/phpcrud/");
        
    }
>>>>>>> 8a726d756047be1ce7991aae18280fd8934c362c
?>