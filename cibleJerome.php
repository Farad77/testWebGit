<?php 

/** 
 * WARNING TRIPLE:
 * Affichage mot de passe en clair
 * Passage mot de passe en clair sur le réseau
 * Concaténation d'un input unsanitazed
*/
$userPassword = $_GET["motdepasse"];

echo 'mot de passe reçu : '. $userPassword;
echo "<br>";
$vraimotdepasse = "0e45786";

/**
 * WARNING DOUBLE:
 * Utilisation du double égal
 * Pas de vérification d'égalité de type
 */

if ($vraimotdepasse == $userPassword) {
    echo 'Bonjour';
} else {
    echo 'Pas bonjour';
}
echo "<br>";
?>

<a href="jerome.php">Retour à la page du formulaire</a>

