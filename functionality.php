<?php

session_start();

require('./database/mysqli_connect/mysqli_connect.php');


if (isset($_POST['qty'])) {
	$qty = (int) $_POST['qty'];
	$pid = $_POST['id'];
	$pprice = $_POST['pprice'];

	$tprice = $qty * $pprice;

	$stmt = mysqli_query($dbc , "UPDATE cart SET qty='".$qty."',total_price='".$tprice."' WHERE id='".$pid."'") or die("Error in db records : ". mysqli_error($dbc));   
  }
?>