<?php

require_once("SuperVillain.php");
require_once("db.php");

session_start();

// Récupérer les valeurs en POST
// Instancier un super hero
// L'ajouter au tableau de session de Personnages 
// Rediriger vers la page d'accueil

if (isset($_POST["nom"]) && isset($_POST["force"]) && isset($_POST["endurance"])) {

    $typePersonnages = "Super Villain";
    $nom = $_POST["nom"];
    $force = $_POST["force"];
    $endurance = $_POST["endurance"];

    $requete = "INSERT INTO supervillain (typePersonnages, nom, forcevillain, endurance) VALUES (?, ?, ?, ?)";
    $resultat = $db->prepare($requete);
    $resultat->execute([$typePersonnages, $nom, $force, $endurance]);
}

header("Location: herocorpEtienne.php");
