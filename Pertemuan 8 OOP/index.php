<?php

require 'ape.php';

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs . "<br>";
echo "cold_blooded : " . $sheep->cold_blooded . "<br><br>";

$kodok = new frog("buduk");

echo "Name : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs . "<br>";
echo "cold_blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : " . $kodok->jump() . "<br><br>";

$sungkong = new ape("Kera Sakti");
echo "Name : " . $sungkong->name . "<br>";
echo "legs : " . $sungkong->legs . "<br>";
echo "cold_blooded : " . $sungkong->cold_blooded . "<br>";
echo "Yell : " . $sungkong->yell();
