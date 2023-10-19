<?php

require_once("SuperVillain.php");

session_start();

// Récupérer les valeurs en POST
// Instancier un super villain
// L'ajouter au tableau de session de Personnages 
// Rediriger vers la page d'accueil

$nom = $_POST["nom"];
$force = $_POST["force"];
$endurance = $_POST["endurance"];

$superVillain = new SuperVillain();
$superVillain->setNom($nom)->setForce($force)->setEndurance($endurance);
array_push($_SESSION["Personnages"], $superVillain);

header("Location: herocorpEtienne.php");
