<?php
// Vérifier si des données ont été envoyées via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Parcourir les arguments POST et afficher leur nom et valeur dans le tableau
    foreach ($_POST as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }

    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des arguments POST</title>
</head>
<body>
    <h1>Test des arguments POST</h1>
    <form method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="age">Âge :</label>
        <input type="text" id="age" name="age"><br><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville"><br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
