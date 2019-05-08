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
 			<form action="query/store.php" method="post">
				  Roll No:<br>
				  <input type="text" name="roll_no" value="">
				  <br>
				  Name:<br>
				  <input type="text" name="name" value="">
				  <br><br>
				  Email:<br>
				  <input type="email" name="email" value="">
				  <br>
				  Address:<br>
				  <textarea name="address">
				  	
				  </textarea>
				  <br><br>
				  Phone:<br>
				  <input type="text" name="phone" value="">
				  <br>

				  <input type="submit" value="Submit">
			</form> 

 		</div>


 		<!-- <?php include 'footer.php';?> -->
 		<div class="footer">
 			 <p>Footer</p>
 		</div>
 </body>
 </html>