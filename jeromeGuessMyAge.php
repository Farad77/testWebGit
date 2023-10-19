<?php 
session_start();
if(!isset($_SESSION['randomAge'])){
    $_SESSION['randomAge'] = rand(0,100);
    $_SESSION['count'] = 10;
}

setcookie("moncookie", "valeurDuCookie");
print_r($_COOKIE);
if (!empty($_POST['userGuess'])) {
    if (isset($_POST['userGuess'])&& isset($_POST['submit'])) {
        $userGuess = $_POST['userGuess']; 
        if ($userGuess < $_SESSION['randomAge']) {
            $_SESSION['count']--;
            echo "<br> C'est plus";
        } elseif($userGuess > $_SESSION['randomAge']) {
            $_SESSION['count']--;
            echo "<br> C'est moins";
        }else{
            echo "<br> Bravo: la partie se termine, le score est affiché : ";
            echo $_SESSION['count'];
            $fichier = fopen("resultatJerome.txt", 'c+b');
            fseek($fichier, filesize('resultatJerome.txt'));
            fwrite($fichier, 'Score: '.$_SESSION['count'].chr(13)."\n");
            session_unset();
            header("refresh: 5, url=jeromeGuessMyAge.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark ">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess My Age</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Quel âge j'ai ? (nombre compris entre 0 et 100 inclus)</h2>
        <form action="jeromeGuessMyAge.php" method="POST">
            <div class="form-group d-flex justify-content-center w-50 mx-auto mb-3">
                <input class="form-control" name="userGuess" type="text" placeholder="Entrez un nombre entre 0 et 100">
            </div>
            <?php if (empty($_POST['userGuess'])) {
                echo "<small> Veuillez saisir un nombre ! </small>" ;
            } ?>
            <div class="form-group d-flex justify-content-center">
                <button class="btn btn-primary" name="submit" type="submit">Confirmer</button>
            </div>
        </form>
    </div>

    <!-- CDN bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
</body>
</html>


