<?php
require_once 'Music.php';
require_once 'ListenList.php';

// Maak een ListenList object en voeg muziek toe
$kees = new ListenList();
$kees->addMusic(new Music('Bach', 'Klassiek', 3));
$kees->addMusic(new Music('ABC', 'House', 2));
$kees->addMusic(new Music('Mozart', 'Klassiek', 5));

// Toon de toegevoegde muziek in ListenList
echo "Muziek toegevoegd aan ListenList:<br>";
foreach ($kees->music as $music) {
    echo $music->getName() . " - " . $music->getGenre() . " - Beluisterd: " . $music->getListen() . "<br>";
}

// Toon de structuur van ListenList object met var_dump
var_dump($kees);
?>
