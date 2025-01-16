<?php
// Vérifier si le formulaire a été soumis avec la méthode GET
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nombre'])) {
    // Récupérer la valeur de 'nombre' depuis $_GET
    $nombre = $_GET['nombre'];

    // Vérifier si la valeur est un nombre entier
    if (is_numeric($nombre) && $nombre == (int)$nombre) {
        // Vérifier si le nombre est pair ou impair
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET - Nombre Pair ou Impair</title>
</head>
<body>
    <h1>Vérification du Nombre</h1>
    <form method="GET">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <input type="submit" value="Vérifier">
    </form>
</body>
</html>
