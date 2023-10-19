<?php
//1) Générer le hash de votre secret
//2) tester avec password_verify
    
echo password_hash("secret",PASSWORD_DEFAULT);


/*
$motDePasse = '$2y$10$mqC7YNqmEItbzRoOXg4PXOr/UmlHhpvxhJK6EeCJIxyRI5m2T7o3.';
       
 if (password_verify(mot de passe saisie en clair, mot de passe hashé)) {
*/
?>