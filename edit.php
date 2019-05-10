<?php
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
			</form> 

 		</div>


 		<!-- <?php include 'footer.php';?> -->
 		<div class="footer">
 			 <p>Footer</p>
 		</div>
 </body>
 </html>