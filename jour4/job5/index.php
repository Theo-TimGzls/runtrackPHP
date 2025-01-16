<?php
// Vérifier si le formulaire a été soumis avec la méthode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les valeurs du formulaire
    $username = $_POST['username'] ?? '';  // Si 'username' n'existe pas, utiliser une chaîne vide
    $password = $_POST['password'] ?? '';  // Si 'password' n'existe pas, utiliser une chaîne vide

    // Vérifier les informations de connexion
    if ($username == 'John' && $password == 'Rambo') {
        echo "C’est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
