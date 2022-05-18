<?php

$doc = new DOMDocument("1.0","UTF-8");

$BookInfo =  $doc -> createElement("BookInfo");

$doc -> appendChild($BookInfo);


$book = $doc -> createElement("book");
$BookInfo -> appendChild($book);

$bookno = $doc -> createElement("bookno","1");
$bookname = $doc -> createElement("bookname","JAVA");
$author = $doc -> createElement("author","Balguru Swami");
$price = $doc -> createElement("price","250");
$year = $doc -> createElement("year","2006");

$book->appendChild($bookno);
$book->appendChild($bookname);
$book->appendChild($author);
$book->appendChild($price);
$book->appendChild($year);

$bookno = $doc -> createElement("bookno","2");
$bookname = $doc -> createElement("bookname","C");
$author = $doc -> createElement("author","Dennis Ritchie");
$price = $doc -> createElement("price","500");
$year = $doc -> createElement("year","1971");

$book = $doc -> createElement("book");
$BookInfo -> appendChild($book);

$book->appendChild($bookno);
$book->appendChild($bookname);
$book->appendChild($author);
$book->appendChild($price);
$book->appendChild($year);

$doc->save("book2.xml");
echo "<h3>Book.xml created</h3>"

?>
