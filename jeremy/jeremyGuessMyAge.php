<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Guess my age ?</h1>
        <form action="cible-jeremy.php" method="GET">
            <label for="inputAge">Quel est mon age ?</label>
            <input type="text" id="inputAge" name="guessAge">
            <button type="submit">Confirmer</button>
        </form>
    </main>
</body>
</html>