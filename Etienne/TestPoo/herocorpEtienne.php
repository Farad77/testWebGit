<!doctype html>
<html lang="fr-FR">

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
    <main class="container my-5">
        <!-- Formulaire Super Hero -->
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <div class="col-lg-8 mx-auto fs-5 text-muted">
                <h1 class="text-body-emphasis">Ajouter un Super Hero</h1>
                <form action="ajouterSuperHero.php" method="post">
                    <input type="text" name="nom" placeholder="Nom du Super Hero" required>
                    <input type="number" name="force" placeholder="Force du Super Hero" required>
                    <input type="number" name="endurance" placeholder="Endurance du Super Hero" required>
                    <br><br>
                    <input class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="submit" name="submit">
                </form>
            </div>

            <!-- Formulaire Super Villain -->
            <div class="p-5 text-center bg-body-tertiary rounded-3">
                <div class="col-lg-8 mx-auto fs-5 text-muted">
                    <h1 class="text-body-emphasis">Ajouter un Super Villain</h1>
                    <form action="ajouterSuperVillain.php" method="post">
                        <input type="text" name="nom" placeholder="Nom du Super Villain" required>
                        <input type="number" name="force" placeholder="Force du Super Villain" required>
                        <input type="number" name="endurance" placeholder="Endurance du Super Villain" required>
                        <br><br>
                        <input class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="submit" name="submit">
                    </form>
                </div>
            </div>

            <!-- Formulaire Gentil Pouvoir -->
            <div class="p-5 text-center bg-body-tertiary rounded-3">
                <div class="col-lg-8 mx-auto fs-5 text-muted">
                    <h1 class="text-body-emphasis">Ajouter un gentil pouvoir</h1>
                    <form action="ajouterGentilPouvoir.php" method="post">
                        <input type="text" name="nom" placeholder="Nom du pouvoir" required>
                        <input type="number" name="puissance" placeholder="Puissance du pouvoir" required>
                        <br><br>
                        <input class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="submit" name="submit">
                    </form>
                </div>
            </div>

            <!-- Formulaire Mechant Pouvoir -->
            <div class="p-5 text-center bg-body-tertiary rounded-3">
                <div class="col-lg-8 mx-auto fs-5 text-muted">
                    <h1 class="text-body-emphasis">Ajouter un mechant pouvoir</h1>
                    <form action="ajouterMechantPouvoir.php" method="post">
                        <input type="text" name="nom" placeholder="Nom du pouvoir" required>
                        <input type="number" name="puissance" placeholder="Puissance du pouvoir" required>
                        <br><br>
                        <input class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>

        <?php

        /* require("Personnage.php"); */
        require("SuperVillain.php");
        require("SuperHero.php");
        require_once("db.php");

        session_start();

        if ($_SESSION["verificationLogin"] === false) {
            header("Location: login.php");
        }

        /* 
        // Pouvoirs 
        // Gentil pouvoir
        $rayonLaser = new GentilPouvoir();
        $rayonLaser->setNom("Rayon Laser")->setPuissance(250);

        $richesse = new GentilPouvoir();
        $richesse->setNom("Richesse")->setPuissance(0);

        $spiderSens = new GentilPouvoir();
        $spiderSens->setNom("Spider Sens")->setPuissance(70);

        // Mechant pouvoir
        $desintegration = new MechantPouvoir();
        $desintegration->setNom("Desintegration")->setPuissance(325);

        $susano = new MechantPouvoir();
        $susano->setNom("Susano")->setPuissance(425);

        $sharingan = new MechantPouvoir();
        $sharingan->setNom("Mangekyou sharingan")->setPuissance(600);

        // Personnages 
        // Super Hero 
        $superman = new SuperHero();
        $superman->ajouterPouvoir($rayonLaser);
        $superman->ajouterPouvoir($richesse);
        $superman->setNom("Superman")->setForce(100)->setEndurance(150);
        echo $superman;
        echo "<br/>";

        $batman = new SuperHero();
        $batman->ajouterPouvoir($richesse);
        $batman->setNom("Batman")->setForce(50)->setEndurance(80);
        echo $batman;
        echo "<br/>";

        $spiderman = new SuperHero();
        $spiderman->ajouterPouvoir($spiderSens);
        $spiderman->setNom("Spiderman")->setForce(30)->setEndurance(100);
        echo $spiderman;
        echo "<br/>";

        // Separation 
        echo "<br/>";
        echo "<hr/>";
        echo "<br/>";
        // Separation 

        // Super Villain 
        $shigaraki = new SuperVillain();
        $shigaraki->ajouterPouvoir($desintegration);
        $shigaraki->setNom("Tomura Shigaraki")->setForce(200)->setEndurance(35);
        echo $shigaraki;
        echo "<br/>";

        $madara = new SuperVillain();
        $madara->ajouterPouvoir($susano);
        $madara->ajouterPouvoir($sharingan);
        $madara->setNom("Madara Uchiwa")->setForce(300)->setEndurance(200);
        echo $madara;
        echo "<br/>";
        */

        if (!isset($_SESSION["Personnages"])) {
            $_SESSION["Personnages"] = array();
        }

        if (!isset($_SESSION["Pouvoirs"])) {
            $_SESSION["Pouvoirs"] = array();
        }

        function reload()
        {
            session_destroy();
            header("Location: herocorpEtienne.php");
        }

        ?>

        <!-- Personnages -->
        <h1 class="text-body-emphasis">Liste des Super Hero</h1>
        <table>
            <thead>
                <th>Type</th>
                <th>Nom</th>
                <th>Force</th>
                <th>Endurance</th>
                <th>Pouvoirs</th>
            </thead>
            <tbody>
                <?php

                $requete = $db->prepare("SELECT * FROM superhero");
                $requete->setFetchMode(PDO::FETCH_ASSOC);
                $requete->execute();
                $superhero = $requete->fetchAll();

                foreach ($superhero as $hero) {
                    echo "<tr>";
                    /* if ($hero instanceof SuperHero) {
                        echo "<td>SuperHero</td>";
                    } else {
                        echo "<td>SuperVillain</td>";
                    } */
                    echo "<td>" . $hero["typePersonnages"] . "</td>";
                    echo "<td>" . $hero["nom"] . "</td>";
                    echo "<td>" . $hero["forcehero"] . "</td>";
                    echo "<td>" . $hero["endurance"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <br>

        <h1 class="text-body-emphasis">Liste des Super Villain</h1>
        <table>
            <thead>
                <th>Type</th>
                <th>Nom</th>
                <th>Force</th>
                <th>Endurance</th>
                <th>Pouvoirs</th>
            </thead>
            <tbody>
                <?php

                $requete = $db->prepare("SELECT * FROM supervillain");
                $requete->setFetchMode(PDO::FETCH_ASSOC);
                $requete->execute();
                $supervillain = $requete->fetchAll();

                foreach ($supervillain as $villain) {
                    echo "<tr>";
                    echo "<td>" . $villain["typePersonnages"] . "</td>";
                    echo "<td>" . $villain["nom"] . "</td>";
                    echo "<td>" . $villain["forcevillain"] . "</td>";
                    echo "<td>" . $villain["endurance"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <br>

        <!-- Pouvoirs -->
        <h1 class="text-body-emphasis">Liste des gentil pouvoirs</h1>
        <table>
            <thead>
                <th>Categorie</th>
                <th>Nom</th>
                <th>Puissance</th>
            </thead>
            <tbody>
                <?php

                $requete = $db->prepare("SELECT * FROM gentilpouvoirs");
                $requete->setFetchMode(PDO::FETCH_ASSOC);
                $requete->execute();
                $gentilpouvoirs = $requete->fetchAll();

                foreach ($gentilpouvoirs as $pouvoir) {
                    echo "<tr>";
                    echo "<td>" . $pouvoir["categorie"] . "</td>";
                    echo "<td>" . $pouvoir["nom"] . "</td>";
                    echo "<td>" . $pouvoir["puissance"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <br>

        <h1 class="text-body-emphasis">Liste des mechant pouvoirs</h1>
        <table>
            <thead>
                <th>Categorie</th>
                <th>Nom</th>
                <th>Puissance</th>
            </thead>
            <tbody>
                <?php

                $requete = $db->prepare("SELECT * FROM mechantpouvoirs");
                $requete->setFetchMode(PDO::FETCH_ASSOC);
                $requete->execute();
                $mechantpouvoirs = $requete->fetchAll();

                foreach ($mechantpouvoirs as $pouvoir) {
                    echo "<tr>";
                    echo "<td>" . $pouvoir["categorie"] . "</td>";
                    echo "<td>" . $pouvoir["nom"] . "</td>";
                    echo "<td>" . $pouvoir["puissance"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="" onclick="reload()">Actualiser</a>
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