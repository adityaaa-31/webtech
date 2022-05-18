<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<Store></Store>");

$item1 = $sxe->addChild('Item');
$item1->addChild('ItemName', 'Pen');
$item1->addChild('ItemPrice', 20);
$item1->addChild('Quantity', 100);

$item2 = $sxe->addChild('Item');
$item2->addChild('ItemName', 'Pencil');
$item2->addChild('ItemPrice', 5);
$item2->addChild('Quantity', 100);

$item3 = $sxe->addChild('Item');
$item3->addChild('ItemName', 'Eraser');
$item3->addChild('ItemPrice', 5);
$item3->addChild('Quantity', 100);

$item4 = $sxe->addChild('Item');
$item4->addChild('ItemName', 'Notebook');
$item4->addChild('ItemPrice', 30);
$item4->addChild('Quantity', 120);

$item5 = $sxe->addChild('Item');
$item5->addChild('ItemName', 'Book');
$item5->addChild('ItemPrice', 120);
$item5->addChild('Quantity', 120);
$sxe->asXML('item.xml');

?>

