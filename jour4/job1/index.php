<?php

$nombre = count($_GET);
// Afficher le nombre d'arguments dans $_GET
echo "Le nombre d'arguments passés via GET est :$nombre <br>";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de GET</title>
</head>
<body>
    <h1>Formulaire GET</h1>
    <form action="index.php" method="GET">
        <label for="nom">Nom :</label>
        <input type="$_GET" id="nom" name="nom"><br><br>

        <label for="age">Âge :</label>
        <input type="$_GET" id="age" name="age"><br><br>

        <!-- <label for="ville">Ville :</label>
        <input type="$_GET" id="ville" name="ville"><br><br> -->

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>