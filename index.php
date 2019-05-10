<?php
//including the database connection file
include "config/dbconnect.php";

<<<<<<< HEAD
$result = mysqli_query($conn, "SELECT * FROM stddb ORDER BY id DESC"); // using mysqli_query instead
=======
>>>>>>> 8a726d756047be1ce7991aae18280fd8934c362c

$result = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC"); // using mysqli_query instead

<<<<<<< HEAD
//var_dump($result);
=======
// $res = mysqli_fetch_array($result);
// var_dump($res);
>>>>>>> 8a726d756047be1ce7991aae18280fd8934c362c
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
 		<div class="listing">
 			<a href="create.php">
 				<button >Add New Student</button>
 			</a>
 			<table border="1px solid black;" class="table_listing">
 				<caption>Internship Students Listing</caption>
 				<br>
 				<thead>
 					<tr>
 						<th>Roll No </th>
 						<th>Name</th>
 						<th>Email</th>
 						<th>Addrss</th>
 						<th>Phone</th>
<<<<<<< HEAD
 						<th>Address</th>
						<th>Action</th>
 					
					
=======
 						<th>Action</th>
 					</tr>
>>>>>>> 8a726d756047be1ce7991aae18280fd8934c362c
 				</thead>
 				<tbody>

 					 <?php 
       					 //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
				        while($res = mysqli_fetch_array($result)) {         
				            echo "<tr>";
				            echo "<td>".$res['rollno']."</td>";
				            echo "<td>".$res['name']."</td>";
				            echo "<td>".$res['email']."</td>";
<<<<<<< HEAD
				            echo "<td>".$res['phone']."</td>";
							echo "<td>".$res['address']."</td>"; 
					        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"query/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
=======
				            echo "<td>".$res['address']."</td>";
				            echo "<td>".$res['phone']."</td>";    
				            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"query/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
				            echo "</tr>";       
>>>>>>> 8a726d756047be1ce7991aae18280fd8934c362c
				        }
				        ?>
 				</tbody>
 			</table>
 		</div>


 		<!-- <?php include 'footer.php';?> -->
 		<div class="footer">
 			 <p>Footer</p>
 		</div>
 </body>
 </html>