<?php

require_once("SuperHero.php");
require_once("GentilPouvoir.php");

session_start();

$nom = $_POST["nom"];
$puissance = $_POST["puissance"];

$superPouvoir = new GentilPouvoir();
$superPouvoir->setNom($nom)->setPuissance($puissance);
array_push($_SESSION["Pouvoirs"], $superHero);

header("Location: makeHero.php");

?>