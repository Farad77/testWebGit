<h1>Login</h1>
<form action="" method="POST">
    <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">S'enregistrer</button>
</form>

<?php

require_once("db.php");

session_start();

$_SESSION["verificationLogin"] = false;

if (isset($_POST["pseudo"]) && isset($_POST["password"])) {

    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["password"];

    // Récupération du mot de passe chiffré
    $requete = $db->prepare("SELECT pseudo, motDePasse FROM joueur WHERE pseudo = ?");
    $requete->setFetchMode(PDO::FETCH_ASSOC);
    $champs = array($pseudo);
    $requete->execute($champs);
    $joueurVerif = $requete->fetchAll();

    if (!empty($joueurVerif)) {
        if (password_verify($mdp, $joueurVerif[0]["motDePasse"]) && $pseudo === $joueurVerif[0]["pseudo"]) {
            $_SESSION["verificationLogin"] = true;
            header("Location: herocorpEtienne.php");
        } else {
            echo "Mot de passe incorrect !";
        }
    } else {
        echo "Mot de passe incorrect !";
    }
}
