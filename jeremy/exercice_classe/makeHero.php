<?php

require('SuperHero.php');
require('SuperVillain.php');

$superman = new SuperHero();
// $batman = new SuperHero();
// $flash = new SuperHero();

$lexLuthor = new SuperVillain();

// $superman = new Personnage();
// $batman = new Personnage();
// $flash = new Personnage();

// afficher l'objet "Personnage"
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

?>