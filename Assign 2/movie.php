<?php

$dom = new DomDocument();
$dom->load("movie.xml");


echo "<h3>Movie Name is: </h3>";

$mname = $dom->getElementsByTagName("MovieTitle");
foreach($mname as $m){
	echo "$m->textContent <br>";
}


echo "<h3>Movie Actor is: </h3>";

$actor = $dom->getElementsByTagName("ActorName");
foreach($actor as $a){
	echo "$a->textContent <br>";
}


echo "<h3>Movie Year is: </h3>";

$year = $dom->getElementsByTagName("ReleaseYear");
foreach($year as $y){
	echo "$y->textContent <br>";
}


?>
