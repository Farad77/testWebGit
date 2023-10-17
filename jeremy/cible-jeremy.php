<?php
session_start();
$VraiAge = "25";
echo "Vous avez donné comme réponse : " . $_GET['guessAge'];
echo "</br>";

if ($_GET['guessAge'] === $VraiAge){
    echo "Well Done ! Votre score est de : " . $_SESSION["score"] += 1;
    echo "</br>";
    echo "<a href='jeremyGuessMyAge'>Jouer à nouveau ?</a>";
    session_destroy();
    
} else {
    if ($_GET['guessAge'] > $VraiAge){
        echo "C'est plus petit.";
        echo "</br>";
        $_SESSION["score"] -= 1;
        echo $_SESSION["score"];
        echo "<a href='jeremyGuessMyAge.php'>Réessayez</a>";
        
    } else {
        echo "C'est plus grand.";
        echo "</br>";
        $_SESSION["score"] -= 1;
        echo $_SESSION["score"];
        echo "<a href='jeremyGuessMyAge.php'>Réessayez</a>";
    }
}
?>