<?php
	session_start();
	$Basic= $_POST['basic'];
	$DA= $_POST['da'];
	$HRA= $_POST['hra'];

	echo "Emp no: ".$_SESSION['enum'] ."<br>";
	echo "Emp name: ".$_SESSION['ename'] ."<br>";
	echo "Emp Address: ".$_SESSION['eaddr'] ."<br>";

	echo "DA is: ".$DA ."<br>";
	$da=10/100*$Basic;
	
	echo "Basic is: ".$Basic ."<br>";
	echo "HRA is: ".$HRA ."<br>";
	$t1= $Basic + $Basic*$da/100 +$Basic*$hra/100;

	echo "Total: ".$t1 ."<br>";
	session_destroy();
?>
