<?php


require_once 'Music.php';

$music1 = new Music('Bach', 'Klassiek', 3);
$music2 = new Music('ABC', 'House', 2);

echo "Music 1 data: " . $music1->arrayToString() . "<br>";
echo "Music 2 data: " . $music2->arrayToString() . "<br>";

var_dump($music1);
var_dump($music2);
?>
