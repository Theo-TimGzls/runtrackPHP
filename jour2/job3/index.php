<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "La Plateforme_<br>"; // Afficher "La Plateforme_" à la place de 42
    } elseif ($i >= 0 && $i <= 20) {
        echo "<i>" . $i . "</i><br>"; // Afficher en italique pour les nombres de 0 à 20
    } elseif ($i >= 25 && $i <= 50) {
        echo "<u>" . $i . "</u><br>"; // Souligner les nombres entre 25 et 50
    } else {
        echo $i . "<br>"; // Afficher normalement les autres nombres
    }
}
?>