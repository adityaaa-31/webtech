<?php
 $nm = $_GET['t1'];
// echo $nm;
 $name = array("ROHIT","VIRAT","DHONI","ASHWIN","HARBHAJAN");
 if(in_array(strtoupper($nm), $name))
 {
     echo "<br>Hello Master " . $nm . "!";
  }
 else
 {
     echo "<br>Stranger , please tell me your name !";
 }
?>
