<?php
session_start();

// if (isset($_SESSION["s_pseudo"]) and isset($_SESSION["s_password"])){
//     header('Location : cible-jeremy.php', true, 301);
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <style>
        input {
            display = block;
        }
    </style> -->
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Connectez-vous !</h1>
        <form action="cible-jeremy.php" method="GET">
            <label for="inputPseudo">Pseudo</label>
            <input type="text" id="inputPseudo" name="pseudo">
            <label for="inputPassword">Mot de passe</label>
            <input type="text" id="inputPassword" name="password">
            <button type="submit">Confirmer</button>
        </form>
    </main>
</body>
</html>