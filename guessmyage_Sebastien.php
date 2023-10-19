<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess My Age</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">


    <style>
        #confettiContainer {
            position: absolute;
            width: 100%;
            height: 50%;
            overflow: hidden;
        }

        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #f00;
            /* Couleur des confettis (peut être personnalisée) */
            border-radius: 50%;
            transform: rotate(45deg);
            animation: confettiAnimation 1s ease-in-out infinite;
        }

        @keyframes confettiAnimation {
            0% {
                transform: translate(0, 0) rotate(45deg);
            }

            100% {
                transform: translate(-100px, 200px) rotate(45deg);
            }
        }
    </style>

</head>

<body class="text-center">
    <div id="confettiContainer"></div>
    <div class="container !direction !spacing shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row">
            <?php
            session_start();
            function saveScore()
            {
                $file = 'scores.txt';
                $current = file_get_contents($file);

                $current .= $_SESSION["username"] . ":" . $_SESSION["score"] . "\n";
                file_put_contents($file, $current);
                $_SESSION["score"] = 10;
                $_SESSION["nombreSecret"] = random_int(0, 100);
                $url = 'https://thispersondoesnotexist.com/';
                $img = 'guess.jpg';
                file_put_contents($img, file_get_contents($url));
            }
            function showForm()
            {
            ?>
                <div class="row">
                    <div class="col fs-1">Quel est mon age? (entre 1 an et 100 ans)</div>
                </div>

                <div class="col-12"><img class="py-1" src="guess.jpg" width="500" height="500" alt="image de personne" /></div>
        </div>
        <div class="row">
            <form method="get">
                <input type="text" name="nombre" />
                <input type="submit" value="GUESS" name="btn btn-primary" />
            </form>
        </div>
    <?php
            }
            if (isset($_POST["username"])) {
                $username = $_POST["username"];
                $_SESSION["username"] = $username;
                $_SESSION["score"] = 10;
                $_SESSION["nombreSecret"] = random_int(0, 100);
                $url = 'https://thispersondoesnotexist.com/';
                $img = 'guess.jpg';
                file_put_contents($img, file_get_contents($url));
    ?>




        <?php
                showForm();
            } else if (isset($_SESSION["username"])) {

                if (isset($_GET["nombre"])) {
                    $nombre = $_GET["nombre"];
                    if ($nombre >  $_SESSION["nombreSecret"] && $nombre != 0) {
                        echo '<div class="row"> <div class="col fs-1">plus petit.</div></div>';
                        $_SESSION["score"] = $_SESSION["score"] - 1;
                        showForm();
                    } else if ($nombre ==  $_SESSION["nombreSecret"] && $nombre != 0) {
                        echo "Gagné: votre score: " . $_SESSION["score"] . ".<br/>";
        ?><script>
                    const confettiContainer = document.getElementById("confettiContainer");

                    for (let i = 0; i < 1000; i++) {
                        const confetti = document.createElement("div");
                        confetti.classList.add("confetti");
                        confettiContainer.appendChild(confetti);

                        const randomX = Math.random() * window.innerWidth;
                        const randomY = Math.random() * window.innerHeight;

                        confetti.style.left = `${randomX}px`;
                        confetti.style.top = `${randomY}px`;

                        setTimeout(() => {
                            confetti.remove();
                        }, 2000); // Supprimez le confetti après 2 secondes
                    }
                </script><?php
                            echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
     <a href='guessmyage_Sebastien.php?nombre=0'>Rejouer</a>";
                            saveScore();
                        } else if ($nombre <  $_SESSION["nombreSecret"] && $nombre != 0) {
                            echo '<div class="row"> <div class="col fs-1">plus grand.</div></div>';
                            $_SESSION["score"] = $_SESSION["score"] - 1;
                            showForm();
                        } else {
                            showForm();
                        }
                    }
                } else { ?>
        <form method="POST">
            <label for="username">Nom du joueur </label>
            <input type="text" name="username" value="" />

            <input type="submit" value="ok" name="btn" />

        </form>

    <?php
                }
    ?>



    </div>
    <script>
        document.getElementById("confettiButton").addEventListener("click", () => {
            const confettiContainer = document.getElementById("confettiContainer");

            for (let i = 0; i < 100; i++) {
                const confetti = document.createElement("div");
                confetti.classList.add("confetti");
                confettiContainer.appendChild(confetti);

                const randomX = Math.random() * window.innerWidth;
                const randomY = Math.random() * window.innerHeight;

                confetti.style.left = `${randomX}px`;
                confetti.style.top = `${randomY}px`;

                setTimeout(() => {
                    confetti.remove();
                }, 2000); // Supprimez le confetti après 2 secondes
            }
        });
    </script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

</body>

</html>