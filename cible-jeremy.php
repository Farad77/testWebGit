<?php
$vraiMotDePasse = "0e45786";
echo "le mot de passe reçu est : " . $_GET['passwordInput'];

// deux problèmes au dessus : 1) affichage du mot de passe en clair, il ne doit pas être afficher dans le code. 
// 2) vérification de la réponse, la ligne 3 est exploitables donc vulnérabilité, évité les concaténations sans test au préalable. 

echo "</br>";

if ($_GET['passwordInput'] === $vraiMotDePasse){
    echo "Bonjour !";
} else {
    echo "Mot de passe incorrect...";
}
?>