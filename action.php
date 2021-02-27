<?php

require('./database/mysqli_connect/mysqli_connect.php');

if (isset($_POST['pid'])) {
	  $pid = $_POST['pid'];
	  $pname = $_POST['pname'];
	  $pprice = $_POST['pprice'];
	  $pimage = $_POST['pimage'];
	  $pcode = $_POST['pcode'];
	  $pqty = (int)$_POST['pqty'];
	  $total_price = $pprice * $pqty;

	  $res = mysqli_query($dbc , "SELECT product_code FROM cart WHERE product_code= ".$pcode);
	  $query = mysqli_query($dbc , "INSERT INTO cart (product_name,product_price,product_image,qty,total_price,product_code) VALUES ('$pname','$pprice','$pimage','$pqty','$total_price','$pcode')");
	  header('location: index.php');
	}

    ?>