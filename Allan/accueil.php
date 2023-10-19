<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Allan/assets/css/styles.css">
    <title>Guess my age </title>
</head>

<body>
    <main class="container text-center">
        <form class="w-50 mx-auto shadow-lg p-3 mb-5 bg-white rounded mt-5" method="POST">
            <h1 class="h3 mb-3 fw-normal">Guess my age</h1>
            <div class="form-floating mx-3 mb-2">
                <input type="hidden" name="try" value="<?php echo $_SESSION['try']; ?>">
                <input type="text" class="form-control" id="guessAge" placeholder="" name="guessAge" >
                <label for="guessAge">Essayer de trouver mon age</label>
            </div>
            <button class="w-60 btn btn-lg" type="submit" id="btn-submit">Envoyer</button>

            <?php

            session_start();

            $_SESSION["age"] = rand(10,50);

            $formInput = $_POST["guessAge"];

            echo "</br>"; 
            echo "</br>"; 

            if ($formInput > $_SESSION["age"]) {

                echo "C'est moin";
                --$_SESSION["try"];

            } elseif ($formInput < $_SESSION["age"]) {

                echo "C'est plus";
                --$_SESSION["try"];
                
            } else {

               echo "Bravo tu as trouvé la bonne réponse " . $_SESSION["age"];
               session_reset();

            }

            echo "Nombre a trouver" . $_SESSION["age"];
            echo "</br>";
            echo "</br>"; 
            echo "Nombre d'essaie restants: " . $_SESSION["try"];

            ?>
        </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>