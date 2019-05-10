<?php
<<<<<<< HEAD
include "config/dbconnect.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM stddb WHERE id=$id");

while($res = mysqli_fetch_array($result))
 {  
    $rollno = $res['rollno'];
    $name = $res['name'];
    $email = $res['email'];
    $phone= $res['phone'];
    $address = $res['address'];
 }
    //  echo $rollno;
    //  echo $name;
    //  echo $email;
    //  echo $phone;
    //  echo $address;
    ?>
  <!DOCTYPE html>
=======
	// including the database connection file
	include "config/dbconnect.php";
 
	//getting id from url
	$id = $_GET['id'];
 
	//selecting data associated with this particular id
	$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
 
	while($res = mysqli_fetch_array($result))
	{	
		$roll_no = $res['roll_no'];
	    $name = $res['name'];
	    $email = $res['email'];
	    $address = $res['address'];
	    $phone = $res['phone'];
	}
?>

 <!DOCTYPE html>
>>>>>>> 8a726d756047be1ce7991aae18280fd8934c362c
 <html>
 <head>
 	<title>Hello PHP</title>

 	<link rel="stylesheet" type="text/css" href="css/style.css">
 
 </head>
 <body>
 		<div  class="banner_div" align="center">
 			<h1 id="banner_title">Linn Internship Program</h1>
 		</div>
 		<div class="form">
 			<form action="query/update.php" method="post">
				  Roll No:<br>
<<<<<<< HEAD
				  <input type="text" name="rollno" value="<?php echo $rollno;?>">
				  <br>
				  Name:<br>
				  <input type="text" name="name" value="<?php echo $name;?>">
				  <br>
				  Email:<br>
				  <input type="email" name="email" value="<?php echo $email;?>">
				  <br>
				  Phone:<br>
				  <input type="text" name="phone" value="<?php echo $phone;?>">
				  <br>
				  Address:<br>
                  <textarea name="address" ><?php echo $address;?></textarea>
				  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <input type="submit" name="update" value="update"><br>
=======
				  <input type="text" name="roll_no" value="<?php echo $roll_no;?>">
				  <br>
				  Name:<br>
				  <input type="text" name="name" value="<?php echo $name;?>">
				  <br><br>
				  Email:<br>
				  <input type="email" name="email" value="<?php echo $email;?>">
				  <br>
				  Address:<br>
				  <textarea name="address" width="400px;" height="200px;"><?php echo $address; ?></textarea>
				  <br><br>
				  Phone:<br>
				  <input type="text" name="phone" value="<?php echo $phone;?>">
				  <br>
				  
				  <input type="hidden" name="id" value="<?php echo $id; ?>" >

				  <input type="submit" name="update" value="Update">
>>>>>>> 8a726d756047be1ce7991aae18280fd8934c362c
			</form> 

 		</div>


 		<!-- <?php include 'footer.php';?> -->
 		<div class="footer">
 			 <p>Footer</p>
 		</div>
 </body>
 </html>