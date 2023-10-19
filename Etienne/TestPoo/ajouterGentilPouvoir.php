<?php

require_once("Pouvoir.php");
require_once("db.php");

session_start();

if (isset($_POST["nom"]) && isset($_POST["puissance"])) {

    $categorie = "Gentil";
    $nom = $_POST["nom"];
    $puissance = $_POST["puissance"];

    $requete = "INSERT INTO gentilpouvoirs (categorie, nom, puissance) VALUES (?, ?, ?)";
    $resultat = $db->prepare($requete);
    $resultat->execute([$categorie, $nom, $puissance]);
}

header("Location: herocorpEtienne.php");
