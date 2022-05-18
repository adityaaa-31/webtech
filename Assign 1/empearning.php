<html>

<body>

	<form action = "total.php" method = "POST"><br>
	Enter Basic:
	<input type = "text" name = "basic"><br>
	Enter DA:
	<input type = "text" name = "da"><br>
	Enter HRA:
	<input type = "text" name = "hra"><br>

	<input type = "submit" value = "Submit">
	</form>
</body>


</html>
<?php 
	session_start();
	$_SESSION['ename'] = $_POST['ename'];
	$_SESSION['enum'] = $_POST['enum'];
	$_SESSION['eaddr'] = $_POST['eaddr'];
	

?>
