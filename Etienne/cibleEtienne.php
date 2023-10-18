<?php
session_start();

$truePassword = "secret";

// Verifie si la session existe
if (isset($_SESSION["login"])) {
    // Oui, afficher le secret et le lien pour actualiser la page
    showSecret($_SESSION["login"]);
    echo "<br/>";
    echo "<a href='' onclick='reload()'>Actualiser</a><br/>";
}

// Verifie si le mot de passe et l'identifiant sont rempli
if (isset($_POST["login"]) && isset($_POST["password"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    /* $password = password_hash($_POST["password"], PASSWORD_DEFAULT); */

    // Oui, verifie si le mot de passe est le bon
    if ($password === $truePassword) {
        $_SESSION["login"] = $login;
    } else {
        header('Location: etienne.php', true, 301);
    }
} else {
    header('Location: etienne.php', true, 301);
}


function showSecret($login)
{
    echo "Ceci est un secret pour " . $login;
}

function reload()
{
    session_destroy();
    header('Location: etienne.php', true, 301);
}
