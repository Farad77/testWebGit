<?php 


$age = 22 ; 
echo "Je m'apelle Allan j'ai ". $age . " ans" ;

$amis = array("Jean","Paul","Michel");
echo "</br>";

// var_dump($amis);

echo "Mon premier amis est ". $amis[0];
echo "</br>";
echo "Mon deuxième amis est ". $amis[1];
echo "</br>";
echo "Mon troisième amis est ". $amis[2];
echo "</br>";

$allan = array("firstName" => "Allan", "lastName" => "Soum" ,"age" => 22);
echo "</br>";
echo $allan["firstName"];
echo $allan["lastName"];

$allFriends = count($amis);

echo "</br>";
echo "j'ai " . $allFriends . " amis en tout ! ";
echo "</br>";

$user1 = array("nom" => "Allan" , "prenom" => "soum");
$users = array($user1, $allan);

$ageCourant = $allan["age"];

echo "Je suis ";
if ($ageCourant<18) {
    echo "Mineur";
}else { 
    echo "Majeur";
};
echo "</br>";


?>

<form action="cible.php" method="get">
    <input type="password" name="password">
    <button type="submit" class=""> envoyer </button>

</form>