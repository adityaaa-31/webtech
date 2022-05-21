<?php
 $nm = $_GET['t1'];
// echo $nm;
 $name = array("Rohit","Virat","Dhoni","Ashwin","Harbhajan");
if($nm==null)
{
	echo "<br>Stranger , please tell me your name !";
} 
else if(in_array($nm, $name))
 {
     echo "<br>Hello Master " . $nm . "!";
  }
 else
 {
     echo "<br>".$nm."  I don't know you";
 }
?>
