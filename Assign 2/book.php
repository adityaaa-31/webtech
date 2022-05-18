<?php

$dom=new DomDocument();
$dom->load("book.xml");


echo "<h3> Name of the book is </h3>";

$bname = $dom->getElementsByTagName("Bookname");

foreach($bname as $b){
	echo "$b->textContent<br><br>";
}

echo "<h3> Author of the book is </h3>";

$author = $dom->getElementsByTagName("Authorname");

foreach($author as $a){
	echo "$a->textContent<br><br>";
}


echo "<h3> Price of the book is </h3>";

$price = $dom->getElementsByTagName("Price");

foreach($price as $p){
	echo "$p->textContent<br><br>";
}

echo "<h3> Year of the book is </h3>";

$year = $dom->getElementsByTagName("Year");

foreach($year as $y){
	echo "$y->textContent<br><br>";
}

?>
