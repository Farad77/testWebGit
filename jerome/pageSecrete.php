<?php
session_start();
if ($_SESSION['connected'] === true) {
    echo "Page secrète";
    echo "<br>";
    echo "Vous êtes connecté.e en tant que : ".$_SESSION['userEmail'];
} else{
    header("Location: connexion.php");
}

?>