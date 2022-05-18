<?php
	session_start();
	$_SESSION["cnm"] = $_POST["cnm"];
	$_SESSION["cadd"] = $_POST["cadd"];
	$_SESSION["cmno"] = $_POST["cmno"];
	
	
	
?>
<html>
<body>
 Enter Earnings
	<form method = 'post' action = 'bill.php'>
	ProdName<input type = text name = 'pnm'></b></br>
	Qty<input type = text name = 'qty'></b></br>
	Rate<input type = text name = 'rate'></b></br>
	<input type = submit value = 'Bill'></b></br>
	</form>
</html>
</body>
