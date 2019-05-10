<?php
include "../config/dbconnect.php";
$id = $_GET['id'];
$reult = mysqli_query($conn, "DELETE FROM stddb WHERE id=$id");
header("Location: http://localhost/phpcrud/");