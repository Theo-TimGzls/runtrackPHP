<?php
// Définir la chaîne de caractères
$str = "Les choses que l'on Possede finissent par nous posseder.";

// Initialiser une variable pour la chaîne inversée
$reversedStr = "";

// Parcourir la chaîne de caractères de la fin vers le début
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

// Afficher la chaîne inversée
echo isset($reversedStr) ? $reversedStr : "Erreur : chaîne non définie.";
?>
