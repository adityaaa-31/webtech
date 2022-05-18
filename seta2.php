<?php
	$name1 = $_GET['n1'];
	$name  = array("Rohit","Virat","Dhoni","Ashwin","Harbhajan");
	
	 if(in_array($name1, $name))
	 {
	     echo "<br>Hello  " . $name1 . "!";
	  }
	 else
	 {
	     echo "<br>Stranger , please tell me your name !";
	 }

?>
