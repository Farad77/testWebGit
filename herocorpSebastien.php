<?php
require('SuperHero.php');
require('SuperVillain.php');
session_start();
if (!isset($_SESSION["Personnages"])) {
  $_SESSION["Personnages"] = array();
}

if (!isset($_SESSION["Pouvoir"])) {
  $_SESSION["Pouvoir"] = array();
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <form action="ajouterSuperHero.php" method="POST">
      <input type="text" name="nom" placeholder="Nom du super hero" />
      <input type="number" name="force" />
      <input type="number" name="endurance" />
      <input type="submit" name="submit" />

    </form>
    <form action="ajouterSuperVillain.php" method="POST">
      <input type="text" name="nom" placeholder="Nom du super villain" />
      <input type="number" name="force" />
      <input type="number" name="endurance" />
      <input type="submit" name="submit" />
    </form>
    <form action="ajouterGentilPouvoir.php" method="POST">
      <input type="text" name="nom" placeholder="Nom du gentil pouvoir" />
      <input type="number" name="puissance" />
      <input type="hidden" name="id" value="<?php echo count($_SESSION["Pouvoir"]) ?>" />
      <input type="submit" name="submit" />
    </form>
    <form action="ajouterMechantPouvoir.php" method="POST">
      <input type="text" name="nom" placeholder="Nom du méchant pouvoir" />
      <input type="number" name="puissance" />
      <input type="hidden" name="id" value="<?php echo count($_SESSION["Pouvoir"]) ?>" />
      <input type="submit" name="submit" />

    </form>



    <?php

    //print_r($_SESSION["Pouvoir"]);
    // print_r($_SESSION["Personnages"]);
    $superman = new SuperHero();
    $superman->setNom("superman")->setForce(10)->setEndurance(10);

    /*
//On créé nos personnages
$superman=new SuperHero();
$lexluthor=new SuperVillain();

//On créé un pouvoir
$rayonLaser=new GentilPouvoir();
$rayonLaser->setNom("Rayon Laser")->setPuissance(9001);

$claque=new GentilPouvoir();
$claque->setNom("Claque")->setPuissance(500);

//On assigne force,endurance et pouvoir au personnage créé
$superman->setForce(10)->setEndurance(10);
$superman->ajouterPouvoir($rayonLaser);
$superman->ajouterPouvoir($claque);

//On affiche
echo $superman->getNom();
echo "<br/>";
echo $superman;
echo "<br/>";


//De meme pour le supervillain
$rayonLaser2=new MechantPouvoir();
$rayonLaser2->setNom("Rayon Laser")->setPuissance(9001);
$claque2=new MechantPouvoir();
$claque2->setNom("Claque")->setPuissance(1);
$lexluthor->setNom("lexluthor")->setForce(1)->setEndurance(1);
$lexluthor->ajouterPouvoir($rayonLaser2);
$lexluthor->ajouterPouvoir($claque2);

echo $lexluthor->getNom();
echo "<br/>";
echo $lexluthor;
echo "<br/>";
*/
    /*$batman=new SuperHero();
$flash=new SuperHero();*/
    /*$jocker=new SuperVillain();
$reverseFlash=new SuperVillain();*/


    /*$superman=new Personnage();

$batman=new Personnage();

$flash=new Personnage();*/
    /*
$batman->setNom("batman")->setForce(1)->setEndurance(1);
echo $batman->getNom();
echo "<br/>";
echo $batman;
echo "<br/>";

$flash->setNom("flash")->setForce(2)->setEndurance(3);
echo $flash->getNom();
echo "<br/>";
echo $flash;*/
    function getGentilPouvoir()
    {
      $resultat = array();
      foreach ($_SESSION["Pouvoir"] as $pouvoir) {
        if ($pouvoir instanceof GentilPouvoir) {
          array_push($resultat, $pouvoir);
        }
      }
      return $resultat;
    }

    function getMechantPouvoir()
    {
      $resultat = array();
      foreach ($_SESSION["Pouvoir"] as $pouvoir) {
        if ($pouvoir instanceof MechantPouvoir) {
          array_push($resultat, $pouvoir);
        }
      }
      return $resultat;
    }


    //array_push($_SESSION["Personnages"],$superman);
    ?>

    <table>
      <thead>


        <th>Nom </th>
        <th>Force </th>
        <th>Endurance </th>
        <th>Liste Pouvoirs </th>
        <th>Type </th>

        <th> Choix pouvoir à ajouter </th>
        <th> Confirmation </th>
      </thead>

      <tbody>

        <?php

        afficherListeHero();
        ?>

      </tbody>
    </table>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

<?php

function afficherListeHero()
{
  $gentilPouvoirs = getGentilPouvoir();
  $mechantPouvoirs = getMechantPouvoir();
  foreach ($_SESSION["Personnages"] as $perso) {
    echo "<tr>";
    echo "<form action='ajouterPouvoirAuPersonnage.php'>";
    echo "<input type='hidden' value='" . $perso->getNom() . "' name='perso' />";
    echo "<td>" . $perso->getNom() . "</td>";
    echo "<td>" . $perso->getForce() . "</td>";
    echo "<td>" . $perso->getEndurance() . "</td>";
    if (count($perso->getPouvoirs()) > 0) {
      echo "<td><ul>";
      foreach ($perso->getPouvoirs() as $pouvoir) {
        echo "<li>" . $pouvoir->getNom() . "</li>";
      }
      echo "</ul></td>";
    } else {
      echo "<td>Aucun</td>";
    }

    if ($perso instanceof SuperHero) {
      echo "<td>SuperHero</td>";
      echo "<td><select name='nouveauPouvoir' >";
      foreach ($gentilPouvoirs as $pouvoir) {
        echo "<option value='" . $pouvoir->getId() . "'>" . $pouvoir->getNom() . "</option>";
      }
    } else {
      echo "<td>SuperVillain</td>";
      echo "<td><select name='nouveauPouvoir' >";
      foreach ($mechantPouvoirs as $pouvoir) {
        echo "<option value='" . $pouvoir->getId() . "'>" . $pouvoir->getNom() . "</option>";
      }
    }

    echo "</td><td><input type='submit' value='Ajouter le pouvoir'/>";

    echo "</form>";
    echo "</tr>";
  }
}

?>