<?php
	$tnm= $_GET['t1'];

	$con_string= "host=192.168.1.21 dbname=ty9 user=ty9";
	$con= pg_connect($con_string);

	echo "<br>";
	
	$query1= "select * from teacher where tname='$tnm'";
	
	$rs1= pg_query($con, $query1) or die("Cannot Execute Query.");

	while($row= pg_fetch_row($rs1))
	echo "$row[0] $row[1] $row[2] $row[3]\n<br>";
	
	
	
	pg_close();
	
?>
