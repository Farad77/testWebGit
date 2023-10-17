<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>testWebGit</title>
</head>

<body>
    <?php
    $age = 20;
    $amis = array("Pierre", "Paul", "Jaques");
    $longueur = count($amis);
    $ages = array(
        "Pierre" => 26,
        "Paul" => 22,
        "Jaques" => 35
    );

    /* var_dump($amis); */

    echo "Etienne à " . $age . " ans.";
    echo "<br/>";

    echo "Son 1er amis est " . $amis[0];
    echo "<br/>";
    echo "Son 2eme amis est " . $amis[1];
    echo "<br/>";
    echo "Son 3eme amis est " . $amis[2];
    echo "<br/>";
    /* echo "Son 4eme amis est " . $amis[3];
                echo "<br/>"; */
    echo "Pierre à " . $ages["Pierre"] . " ans, Paul à " . $ages["Paul"] . " ans et Jaques à " . $ages["Jaques"] . " ans.";
    echo "<br/>";
    /* echo $longueur; */

    if ($ages["Pierre"] > $ages["Jaques"]) {
        echo "Pierre est plus grand que Jaques";
    } else {
        echo "Jaques est plus grand que Pierre";
    }

    echo "<br/>";
    echo "<br/>";

    ?>

    <form action="cibleEtienne.php" method="get">
        <input type="password" name="mdp" />
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>