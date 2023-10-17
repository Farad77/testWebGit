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
        <div>











            <?php
            //phpinfo();
            $age = 25;

            echo "sebastien à " . $age . " ans";
            echo "<br/>";

            $amis = array("Jean", "Paul", "Michel");

            var_dump($amis);

            echo "son 1er ami est " . $amis[0];
            echo "<br/>";
            echo "son 2eme ami est " . $amis[1];
            echo "<br/>";
            echo "son 3eme ami est " . $amis[2];
            echo "<br/>";
            $longueur = count($amis);
            echo $longueur;
            echo "<br/>";
            $ages = array(
                "Jean" => 15,
                "Paul" => 25,
                "Michel" => 50
            );
            echo "Jean à " . $ages["Jean"] . " ans";
            // echo "son 4eme ami est ".$amis[3];
            echo "<br/>";

            $personne1 = array("Manglou", "Sebastien", 22);
            $personne2 = array("Robert", "Jean", 20);

            $personnes = array($personne1, $personne2);
            /*var_dump($personnes);

            var_dump($personnes[0]);

            var_dump($personnes[1]);*/

            echo $personnes[1][2];
            echo "<br/>";

            $condition = True;

            $ageCourant = $ages["Jean"];

            if ($ageCourant < 18) {
                echo "Mineur";
            } else {
                echo "Majeur";
            }
            echo "<br/>";
            $motdepasse = "18";
            if ($motdepasse == 18) {
                echo "OK";
            } else {
                echo "pasok";
            }


           // var_dump($_SERVER);

            ?>










        </div>
        <form action="cibleSebastien.php" method="get">
            <input type="password" name="motdepasse" />
            <button type="submit" class="btn btn-primary">Se Connecter</button>
        </form>
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