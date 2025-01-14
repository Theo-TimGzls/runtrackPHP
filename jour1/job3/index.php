<?php

$booleanVar = false;

$intVar = 21;

$stringVar = "Goodbye, World!";

$floatVar = 9.58;

echo "Valeur de la variable booléenne : " . $booleanVar . "<br>";
echo "Valeur de la variable entière : " . $intVar . "<br>";
echo "Valeur de la variable chaîne de caractères : " . $stringVar . "<br>";
echo "Valeur de la variable flottante : " . $floatVar . "<br>";

// Génération du tableau HTML
echo "<table border='1'>";
echo "<thead>";
echo "<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";
echo "</thead>";
echo "<tbody>";

// Tableau des variables à afficher
$variables = [
    ["type" => gettype($booleanVar), "nom" => "booleanVar", "valeur" => $booleanVar],
    ["type" => gettype($intVar), "nom" => "intVar", "valeur" => $intVar],
    ["type" => gettype($stringVar), "nom" => "stringVar", "valeur" => $stringVar],
    ["type" => gettype($floatVar), "nom" => "floatVar", "valeur" => $floatVar]
];

// Boucle pour afficher chaque ligne du tableau
foreach ($variables as $variable) {
    echo "<tr>";
    echo "<td>" . $variable['type'] . "</td>";
    echo "<td>" . $variable['nom'] . "</td>";
    echo "<td>" . (is_bool($variable['valeur']) ? ($variable['valeur'] ? 'true' : 'false') : $variable['valeur']) . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

?>

