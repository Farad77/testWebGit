<?php

// premier étape
// generer le hash de votre secret
//  deuxieme étape
// tester avec password_verify
session_start();

$password = $_GET['password'];
$hachage = password_hash('secret', PASSWORD_DEFAULT);

echo $hachage;

echo "</br>";

echo "</br>";

if (isset($_GET['pseudo']) and isset($_GET['password'])) {
    $_SESSION["s_pseudo"] = $_GET['pseudo'];
    $_SESSION["s_password"] = $_GET['password'];
    echo "le vrai mot de passe est : " . password_verify($password, $hachage);

    echo "</br>";
    echo "c'est un secret";
} else {
    echo header('Location:exercice_session');
}

echo "Vous êtes déjà connecté, pseudo : " . $_GET["pseudo"];

// $VraiAge = "25";
// echo "Vous avez donné comme réponse : " . $_GET['guessAge'];
// echo "</br>";

// if ($_GET['guessAge'] === $VraiAge){
//     echo "Well Done ! Votre score est de : " . $_SESSION["score"] += 1;
//     echo "</br>";
//     echo "<a href='jeremyGuessMyAge'>Jouer à nouveau ?</a>";
//     session_destroy();
    
// } else {
//     if ($_GET['guessAge'] > $VraiAge){
//         echo "C'est plus petit.";
//         echo "</br>";
//         $_SESSION["score"] -= 1;
//         echo $_SESSION["score"];
//         echo "<a href='jeremyGuessMyAge.php'>Réessayez</a>";
        
//     } else {
//         echo "C'est plus grand.";
//         echo "</br>";
//         $_SESSION["score"] -= 1;
//         echo $_SESSION["score"];
//         echo "<a href='jeremyGuessMyAge.php'>Réessayez</a>";
//     }
// }
?>