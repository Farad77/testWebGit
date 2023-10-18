<?php

require_once("SuperHero.php");

session_start();

$nom = $_POST["personnage"];
$force = $_POST["force"];
$endurance = $_POST["endurance"];

$superHero = new SuperHero();
$superHero->setNom($nom)->setForce($force)->setEndurance($endurance);
array_push($_SESSION["Personnages"], $superHero);

header("Location: makeHero.php");

?>