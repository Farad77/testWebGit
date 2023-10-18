<?php
session_start();
if (isset($_SESSION) && $_SESSION['connected'] === true) {
    echo "Page secrète";
    echo "<br>";
    echo "Vous êtes connecté.e en tant que : ".$_SESSION['userEmail'];
} else{
    header("Location: connexion.php");
}

?>