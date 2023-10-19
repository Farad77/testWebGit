<?php
require_once("MechantPouvoir.php");
session_start();

//TODO:Valider les champs
$nom=$_POST["nom"];
$force=$_POST["puissance"];
$id=$_POST["id"];

$gentilPouvoir=new MechantPouvoir();
$gentilPouvoir->setNom($nom)->setPuissance($force)->setId($id);
array_push($_SESSION["Pouvoir"],$gentilPouvoir);

header("Location: herocorpSebastien.php");

?>