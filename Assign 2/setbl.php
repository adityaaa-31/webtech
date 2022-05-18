<?php

$xml = simplexml_load_file("setb1.xml") or die("Unable to open");
var_dump($xml);

$i = 1;
foreach($xml -> books as $book){

	echo "<br> Book  = $i <br>";
	echo "<br>Books category attribute= ".$book->attributes() ."<br>";
	echo "<br>Book Number elements= ".$book->bookno."<br>";
	echo "<br>Book_name element= ".$book-> bookname."<br>";
	echo "<br>Author_name element= ".$book-> authorname."<br>";
	echo "<br>Price element = ".$book->price."<br>";
	echo "<br>Year element = ".$book->year."<br>";
	$i++;


}

?>
