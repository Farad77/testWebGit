<h1>Création de compte</h1>
<form action="" method="POST">
    <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">S'enregistrer</button>
</form>

<?php

require_once("db.php");

/* require_once("Personnage.php"); */

/* var_dump($db); */

/* $requete = $db->query("select * from personnages");

// $requete->setFetchMode(PDO::FETCH_ASSOC); 
$requete->setFetchMode(PDO::FETCH_CLASS, "Personnage");

$resultat = $requete->fetchAll();

foreach ($resultat as $perso) {
    echo $perso . "<br/>";       
} */

// Verifier les inputs
if (isset($_POST["pseudo"]) && isset($_POST["password"])) {

    $pseudo = $_POST["pseudo"];
    $mdp = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $requete = "INSERT INTO joueur (pseudo, motDePasse) VALUES (?, ?)";
    $resultat = $db->prepare($requete);
    $resultat->execute([$pseudo, $mdp]);
}
