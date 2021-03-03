<?php

session_start();
// header('location: cart.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){

$cust_name = strip_tags($_POST['full_name']);
$cust_email = strip_tags($_POST['email']);
$cust_phone = strip_tags($_POST['phone']);
$cust_address = strip_tags($_POST['mail_address']);

$_SESSION["cust_name"]=$cust_name;
$_SESSION["cust_email"]=$cust_email;
$_SESSION["cust_phone"]=$cust_phone;

echo "Hi, ".$cust_name. "We have received your order ";

header('location: submission.php');


}

?>