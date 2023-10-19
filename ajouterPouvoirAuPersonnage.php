<?php
require_once("SuperHero.php");
require_once("SuperVillain.php");
session_start();
$persoChoisi=$_GET["perso"];
$pouvoirChoisi=$_SESSION["Pouvoir"][$_GET["nouveauPouvoir"]];


foreach($_SESSION["Personnages"] as $perso){
    if($perso->getNom()===$persoChoisi){
        $persoChoisi=$perso;
        $persoChoisi->ajouterPouvoir($pouvoirChoisi);
        header("Location: herocorpSebastien.php");
    }
}
//echo $_GET["perso"]." ".$_GET["nouveauPouvoir"];
header("Location: herocorpSebastien.php");


?>