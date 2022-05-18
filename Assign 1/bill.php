<?php
	session_start();
	
	$qty=$_POST["qty"];
	$rate=$_POST["rate"];

	echo "Customer Information <br>";
	echo "<br>Customer Name =".$_SESSION["cnm"];
	echo "<br>Customer Address =".$_SESSION["cadd"];
	echo "<br>Customer Mobile No =".$_SESSION["cmno"];

	echo "<br><br>Product Information";
	
	echo "<br><br>Product Name =".$_POST["pnm"];
	echo "<br>Qty =".$_POST["qty"];
	echo "<br>Rate =".$_POST["rate"];
	
	echo "<br>Total Amount =".$qty*$rate;
	session_destroy();
	
?>	


