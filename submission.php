<?php


    session_start();

    echo $_SESSION["cust_name"];
    echo $_SESSION["cust_email"];
    echo $_SESSION["cust_phone"];

    echo "<h2>Hi, ".$_SESSION["cust_name"].'</h2>';
	echo "<h3>Thank you for shopping with Us, The order item is placed successfully</h3>";
	echo "<h3>The billing information is sent to the : ".$_SESSION["cust_email"]."</h3>";


    unset($_SESSION["cust_name"]);
    unset($_SESSION["cust_email"]);
    unset($_SESSION["cust_phone"]);
    unset($_SESSION["name"]);
    unset($_SESSION["pprice"]);
    unset($_SESSION["pqty"]);

?>


