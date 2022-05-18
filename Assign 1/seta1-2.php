<?php
echo "Style is ".$_GET['font']."<br> Font Color is ".$_GET['fontcol']."<br> Background color is ".$_GET['bgcolor']."<br> Size is ".$_GET['fontsize'];

	setcookie("Set1",$_GET['font']);
	setcookie("Set2",$_GET['fontcol']);
	setcookie("Set3",$_GET['fontsize']);
	setcookie("Set4",$_GET['bgcolor']);



?>
<html>
<body>
	<form action = "display.php">
	<input type = submit value = submit>
	</form>
</body>
</html>
