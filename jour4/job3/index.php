<?php
// Si des données ont été envoyées via POST, on affiche le nombre d'arguments
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Compter le nombre d'arguments dans $_POST
    $nombreArguments = count($_POST);
    echo "Le nombre d'arguments envoyés via POST est : $nombreArguments<br>";

    // Afficher les arguments et leurs valeurs (facultatif)
    if ($nombreArguments > 0) {
        echo "Les arguments POST envoyés sont :<br>";
        foreach ($_POST as $key => $value) {
            echo "$key = $value<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST</title>
</head>
<body>
    <h1>Test du nombre d'arguments POST</h1>
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
