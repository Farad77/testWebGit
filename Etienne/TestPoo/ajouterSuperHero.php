<?php

require_once("SuperHero.php");

session_start();

// Récupérer les valeurs en POST
// Instancier un super hero
// L'ajouter au tableau de session de Personnages 
// Rediriger vers la page d'accueil

$nom = $_POST["nom"];
$force = $_POST["force"];
$endurance = $_POST["endurance"];

$superHero = new SuperHero();
$superHero->setNom($nom)->setForce($force)->setEndurance($endurance);
array_push($_SESSION["Personnages"], $superHero);

header("Location: herocorpEtienne.php");
