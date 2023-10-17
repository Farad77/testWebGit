<?php
//WARNING TRIPLE:
//Affichage mot de passe en clair
//Passage mot de passe en clair sur le réseau
//Concaténation d'un input non vérifié d'un utilisateur
echo "mot de passe reçu: " . $_GET["mdp"];
echo "<br/>";
$vraiMotDePasse = "0e456";

//WARNING BIS:
//Utilisation du double égal, pas de vérifiaction d'égalité de type
if($vraiMotDePasse == $_GET["mdp"]){
    echo "Mot de passe valide !";
} else {
    echo "Mot de passe incorrect, veuillez réessayer !";
}
?>