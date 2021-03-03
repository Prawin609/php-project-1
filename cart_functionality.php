<?php

session_start();

require('./database/mysqli_connect/mysqli_connect.php');


if (isset($_POST['pid'])) {
	  $pid = $_POST['pid'];
	  $pname = $_POST['pname'];
	  $pprice = $_POST['pprice'];
	  $pimage = $_POST['pimage'];
	  $pcode = $_POST['pcode'];
	  $pqty = (int)$_POST['pqty'];
	  $total_price = $pprice * $pqty;

	  $_SESSION["name"]=$pname;
	  $_SESSION["pprice"]=$pprice;
	  $_SESSION["pqty"]=$pqty;


	  $query = mysqli_query($dbc , "INSERT INTO cart (product_name,product_price,product_image,qty,total_price,product_code) VALUES ('$pname','$pprice','$pimage','$pqty','$total_price','$pcode')") or die("Error in db records : ". mysqli_error($dbc));
	  header('location: index.php');
}

?>
