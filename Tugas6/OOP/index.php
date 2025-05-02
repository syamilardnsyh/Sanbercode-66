<?php

require_once("Animal.php");

$shaun = new Animal("Shaun");

echo "Nama : " . $shaun->name . "<br>";
echo "legs : " . $shaun->legs . "<br>";
echo "Cold Blooded : " . $shaun->cold_blooded . "<br>";

require_once("Frog.php");

$kodok = new Frog("Buduk");

echo "Nama : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs . "<br>";
echo "Cold Blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : " . $kodok->jump . "<br>";

require_once("Ape.php");

$sungokong = new Ape("Kera Sakti");

echo "Nama : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs . "<br>";
echo "Cold Blooded : " . $sungokong->cold_blooded . "<br>";
echo "Jump : " . $sungokong->yell . "<br>";

?>