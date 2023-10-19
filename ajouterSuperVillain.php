<?php
require_once("SuperVillain.php");
//Recupérer les valeurs POST
//Instancier un super hero
//L'ajouter au tableau de session des personnages
//Rediriger vers la page d'accueil
session_start();
//TODO:Valider les champs
$nom=$_POST["nom"];
$force=$_POST["force"];
$endurance=$_POST["endurance"];

$superHero=new SuperVillain();
$superHero->setNom($nom)->setForce($force)->setEndurance($endurance);
array_push($_SESSION["Personnages"],$superHero);

header("Location: herocorpSebastien.php");

?>