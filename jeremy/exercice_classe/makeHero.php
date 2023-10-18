
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <form action="ajouterSuperHero.php" method="POST">
        <input type="text" name="personnage">
        <input type="number" name="force">
        <input type="number" name="endurance">
        <input type="submit" name="submit">
    </form>

    <form action="ajouterSuperVillain.php" method="POST">
        <input type="text" name="personnage">
        <input type="number" name="force">
        <input type="number" name="endurance">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

require('SuperHero.php');
require('SuperVillain.php');
require('GentilPouvoir.php');
require('MechantPouvoir.php');

session_start();
$superman = new SuperHero();
// $batman = new SuperHero();
// $flash = new SuperHero();

$lexLuthor = new SuperVillain();

// $superman = new Personnage();
// $batman = new Personnage();
// $flash = new Personnage();

// afficher l'objet "Personnage"

$rayonLaser = new GentilPouvoir();
$rayonLaser->setNom("rayon laser")->setPuissance(901);

$superman->setNom("Superman")->setForce(1)->setEndurance(0);
echo $superman->_toString();

echo "</br>";
$lexLuthor->setNom("Lex Luthor")->setForce(1)->setEndurance(0);
echo $lexLuthor->_toString();

// $batman->setNom("batman");
// echo $batman->_toString();

// echo "</br>";

// $flash->setNom("flash");
// echo $flash->_toString();

if (!isset($_SESSION["Personnages"])){
    $_SESSION["Personnages"] = array();
}

if (!isset($_SESSION["Pouvoirs"])){
    $_SESSION["Pouvoirs"] = array();
}
?>

<table>
<thead><th>Nom</th><th>Force</th><th>Endurance</th></thead>
<tbody>
    <?php
    foreach($_SESSION["Personnages"] as $perso) {
        echo "<tr>";
        echo "<td>" . $perso->getNom()."</td>";
        echo "<td>" . $perso->getForce()."</td>";
        echo "<td>" . $perso->getEndurance()."</td>";
        echo "<tr>";
    }
    ?>
</tbody>

</table>

<table>
<thead><th>Pouvoir</th><th>Puissance</th></thead>
<tbody>
    <?php
    foreach($_SESSION["Personnages"] as $perso) {
        echo "<tr>";
        echo "<td>" . $perso->getNom()."</td>";
        echo "<td>" . $perso->getPuissance()."</td>";
        echo "<tr>";
    }
    ?>
</tbody>

</table>