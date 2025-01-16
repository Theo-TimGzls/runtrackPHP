<?php
// Vérifier si des arguments GET ont été envoyés
if (!empty($_GET)) {
    // Démarre la table HTML
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";
    
    // Parcourir les arguments GET et les afficher dans le tableau
    foreach ($_GET as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }
    
    // Terminer la table HTML
    echo "</table>";
} else {
    echo "Aucun argument GET n'a été envoyé.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des arguments GET</title>
</head>
<body>
    <h1>Test des arguments GET</h1>
    <form method="GET">
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
