<?php

require_once("Pouvoir.php");

session_start();

// Récupérer les valeurs en POST
// Instancier un pouvoir
// L'ajouter au tableau de session de Pouvoirs
// Rediriger vers la page d'accueil

$categorie = $_POST["categorie"];
$nom = $_POST["nom"];
$puissance = $_POST["puissance"];

$pouvoir = new Pouvoir();
$pouvoir->setCategorie($categorie)->setNom($nom)->setPuissance($puissance);
array_push($_SESSION["Pouvoirs"], $pouvoir);

header("Location: herocorpEtienne.php");
