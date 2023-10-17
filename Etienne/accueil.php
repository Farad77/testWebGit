<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <title>Document</title>
</head>

<!-- Bootstrap -->

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin m-auto">
        <h1 class="h3 mb-3 fw-normal">Quel age j'ai ?</h1>
        <div class="d-flex align-content-around flex-wrap">
            <form action="" method="get">
                <!-- Guess -->
                <br />
                <div class="form-floating">
                    <input type="text" class="form-control" required id="Guess" name="guess" placeholder="Entrez votre guess" />
                    <label for="Guess">Guess</label>
                </div>

                <br />
                <hr />
                <br />

                <!-- Bouton -->
                <button class="btn btn-primary w-100 py-2" type="submit">
                    Confirmer
                </button>
            </form>
        </div>
    </main>

    <?php

    session_start();

    if (empty($_SESSION["age"])) {
        $_SESSION["age"] = rand(1, 100);
    }

    if (empty($_SESSION["score"])) {
        $_SESSION["score"] = 11;
    }

    echo "Votre guess: " . $_GET["guess"] . "<br/>";
    /* echo $_SESSION["age"] . "<br/>"; // del */

    if ($_GET["guess"] < $_SESSION["age"]) {
        $_SESSION["score"] -= 1;
        echo "C'est plus !";
    } elseif ($_GET["guess"] > $_SESSION["age"]) {
        $_SESSION["score"] -= 1;
        echo "C'est moins !";
    } else {
        echo "Bravo, votre score et de: " . $_SESSION["score"];
        header("Refresh:2");
        session_destroy();
    }

    echo "<br/>";
    echo "Score actuel: " . $_SESSION["score"];
    

    ?>

    <!-- Integration Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Fin de Integration Bootstrap -->
    <!-- Fin de Bootstrap -->
</body>

</html>