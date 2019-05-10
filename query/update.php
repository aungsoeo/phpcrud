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
        $phone = $_POST['phone'];;    
        
        //updating the table
        $result = mysqli_query($conn, "UPDATE students SET roll_no='$roll_no',name='$name',email='$email',address='$address',phone='$phone' WHERE id=$id");
        
        //redirectig to index.php
        header("Location: http://localhost:8888/phpcrud/");
        
    }
?>