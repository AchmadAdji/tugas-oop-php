<?php

require_once 'ape.php';
require_once 'frog.php';

$sheep = new Animal("Shaun");
echo "Name: ",$sheep->name;
echo "<br>";
echo "Legs: ",$sheep->legs;
echo "<br>";
echo "Cold Blooded: ",$sheep->cold_blooded;
echo "<br><br>";

$Kodok = new Frog("Kodok");
echo "Name: ",$Kodok->name;
echo "<br>";
echo "Legs: ",$Kodok->legs;
echo "<br>";
echo "Cold Blooded: ",$Kodok->cold_blooded;
echo "<br>";
echo "Jump: ",$Kodok->jump();
echo "<br><br>";

$Kera = new Ape("Kera");
echo "Name: ",$Kera->name;
echo "<br>";
echo "Legs: ",$Kera->legs;
echo "<br>";
echo "Cold Blooded: ",$Kera->cold_blooded;
echo "<br>";
echo "Yell: ",$Kera->yell();

?>