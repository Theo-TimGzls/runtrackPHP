<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = (int)$_GET['largeur'];
    $hauteur = (int)$_GET['hauteur'];

    // Vérifier que la largeur et la hauteur sont valides
    if ($largeur > 0 && $hauteur > 0) {
        // Dessiner le toit
        for ($i = 1; $i <= $hauteur; $i++) {
            echo str_repeat(' ', $hauteur - $i) . str_repeat('*', 2 * $i - 1) . "<br>";
        }

        // Dessiner le corps de la maison
        for ($i = 1; $i <= $largeur; $i++) {
            echo '*' . str_repeat(' ', $largeur - 2) . '*' . "<br>";
        }

        // Dessiner la base
        echo str_repeat('*', $largeur);
    } else {
        echo "Veuillez entrer des valeurs valides pour la largeur et la hauteur.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Maison</title>
</head>
<body>
    <h1>Créer une Maison</h1>
    <form method="GET">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" required><br><br>

        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" required><br><br>

        <input type="submit" value="Créer la maison">
    </form>
</body>
</html>
