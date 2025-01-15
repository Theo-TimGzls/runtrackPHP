<?php
$str = "Dans l'espace, personne ne vous entend crier";

// Initialiser un compteur pour les caractères
$compteur = 0;

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Incrémenter le compteur à chaque caractère
    $compteur++;
}

// Afficher le nombre de caractères
echo "Le nombre de caractères dans la chaîne est : " . $compteur;
?>
