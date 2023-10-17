<?php
//WARNING TRIPLE:
//Affichage mot de passe en clair
//Passage mot de passe en clair sur le réseau
//Concaténation d'un input non vérifié d'un utilisateur 
//echo "mot de passe reçu: ".$_GET["motdepasse"];
echo "<br/>";
$vraimotdepasse="coucou";

//$vraimotdepasse="856749124568970745678974e0";

$vraimotdepasse="0e856749124568970745678974";

//WARNING BIS:
//Utilisation du double egal, pas de verification d'egalité
//de type.

if($vraimotdepasse === $_GET["motdepasse"]){
    echo "Bonjour,admin!";
}
else{
    echo "Mot de passe incorrect, veuillez réessayer";
}
?>