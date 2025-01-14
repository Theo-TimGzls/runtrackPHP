<?php
for ($i = 0; $i <= 1337; $i++) {
    // Vérifier si le nombre est 26, 37, 88 ou 1111
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
        continue; // Passer au nombre suivant
    }
    echo $i . "<br>"; // Afficher le nombre avec un retour à la ligne
}
?>
