<?php

$age = 25;

echo "Jérémy à " . $age . " ans.";

echo "</br>";

$ageCourant = 10;

if ($ageCourant < 18){
    echo "Mineur.";
}
else {
    echo "Majeur.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <form action="cible-jeremy.php" method="GET">
            <input type="password" name="passwordInput">
            <button type="submit" class="btn btn-primary w-100 py-2">Se connecter</button>
        </form>
    </div>
    
</body>
</html>