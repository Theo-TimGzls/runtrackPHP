<?php
// Définir le tableau contenant les nombres
$nombres = [200, 204, 173, 98, 171, 404, 459];

// Parcourir le tableau
foreach ($nombres as $nombre) {
    // Utiliser isset pour vérifier si le nombre est défini
    if (isset($nombre)) {
        // Vérifier si le nombre est pair ou impair
        if ($nombre % 2 == 0) {
            echo $nombre . " est paire<br />";
        } else {
            echo $nombre . " est impaire<br />";
        }
    }
}
?>
