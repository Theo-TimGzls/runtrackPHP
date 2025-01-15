<?php
// $str = "I'm sorry Dave I'm afraid I can't do that";

// Définir un tableau des voyelles
// $voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

// Parcours de la chaîne
// for ($i = 0; $i < strlen($str); $i++) {
    // Vérifie si le caractère courant est une voyelle
    // if (isset($voyelles[strpos('aeiouAEIOU', $str[$i])])) {
        // echo $str[$i];
    // }
// }




$str = "I'm sorry Dave I'm afraid I can't do that";

// Définir une chaîne contenant toutes les voyelles
$voyelles = "aeiouAEIOU";

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Si le caractère courant est une voyelle
    if (strpos($voyelles, $str[$i]) !== false) {
        echo $str[$i];
    }
}
?>
