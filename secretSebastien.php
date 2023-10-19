<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .ticket-container {
            width: 200px;
            height: 100px;
            position: relative;
            overflow: hidden;
        }

        .ticket-text {
            font-size: 20px;
            color: black;
            position: absolute;
            top: 30px;
            left: 10px;
            z-index: 1;
        }

        .ticket-overlay {
            width: 100%;
            height: 100%;
            background: grey;

            top: 0;
            left: 0;
            z-index: 2;
        }
    </style>
</head>

<body>
    <div class="ticket-container">
        <div class="ticket-text unselectable">
            <?php
            session_start();

            //1)Vérifier qu'on vient du formulaire de login avec les bonnes info
            //qui ont été renseigné
            //Si le login et le mot de passe corresponde, on "log" l'utilisateur

            //2)Ou alors qu'on est déjà loggué
            // Pour etre loggué on utilise la variable de session pour enregistré
            // un etat


            //$motDePasse = "secret";
            $motDePasse = '$2y$10$mqC7YNqmEItbzRoOXg4PXOr/UmlHhpvxhJK6EeCJIxyRI5m2T7o3.';
            // SHA1 SHA256
            // MD5
            // 

            //Est ce que l'utilisateur est déjà loggué?
            if (isset($_SESSION["login"])) {
                showSecret($_SESSION["login"]);
            }

            //Non, est ce qu'il essaye de challenge le login?
            else if (isset($_POST["login"]) and isset($_POST["password"])) {

                //oui, on test le mot de passe
                $login = $_POST["login"];
                $password = $_POST["password"];

                //if ($password === $motDePasse) {
                if (password_verify($password, $motDePasse)) {
                    //Ok , on le loggue et on montre le secret
                    $_SESSION["login"] = $login;
                    showSecret($login);
                } else {
                    gotoLogin();
                }
            } else {
                gotoLogin();
            }

            function showSecret($login)
            {
                echo " Ceci est un secret pour " . $login;
            }

            function gotoLogin()
            {
                header("Location: loginSebastien.php", true, 301);
            }
            ?>
        </div>
        <canvas class="ticket-overlay" id="scratch-area"></canvas>
    </div>
    <script>
        let scratching = false;
        const canvas = document.getElementById('scratch-area');
        const ctx = canvas.getContext('2d');

        canvas.width = 200;
        canvas.height = 100;

        ctx.fillStyle = 'black';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.globalCompositeOperation = 'destination-out';

        document.querySelector('.ticket-overlay').addEventListener('mousedown', () => {
            scratching = true;
        });

        document.querySelector('.ticket-overlay').addEventListener('mouseup', () => {
            scratching = false;
        });

        document.querySelector('.ticket-overlay').addEventListener('mousemove', (e) => {
            if (scratching) {
                const rect = canvas.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const radius = 40;
                ctx.beginPath();
                ctx.arc(x, y, radius, 0, Math.PI * 2);
                ctx.fill();
            }
        });
    </script>
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