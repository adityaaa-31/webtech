<?php

$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<MovieCDStore></MovieCDStore>");

$item1 = $sxe->addChild('Movie');
$item1->addAttribute('Category','Classical');
$item1->addChild('MovieTitle','Batman');
$item1->addChild('ActorName', 'Christian Bale');
$item1->addChild('ReleaseYear', 2012);

$item2 = $sxe->addChild('Movie');
$item2->addAttribute('Category','Horror');
$item2->addChild('MovieTitle','Joker');
$item2->addChild('ActorName', 'Jared Leto');
$item2->addChild('ReleaseYear', 2016);

$item3 = $sxe->addChild('Movie');
$item3->addAttribute('Category','Action');
$item3->addChild('MovieTitle','FF');
$item3->addChild('ActorName', 'Vin Diesel');
$item3->addChild('ReleaseYear', 2018);

$sxe->asXML('setcmovie.xml');

?>
