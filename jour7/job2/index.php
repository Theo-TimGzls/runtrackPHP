<?php
// Vérifie si le cookie 'nbvisites' existe déjà
if (isset($_COOKIE['nbvisites'])) {
    // Si le cookie existe, on l'incrémente
    $nbVisites = $_COOKIE['nbvisites'] + 1;
} else {
    // Sinon, on initialise le cookie à 1 (première visite)
    $nbVisites = 1;
}

// On crée ou met à jour le cookie avec le nouveau nombre de visites
setcookie('nbvisites', $nbVisites, time() + 3600);  // expire dans 1 heure

// Si le formulaire de réinitialisation a été soumis
if (isset($_POST['reset'])) {
    // On réinitialise le cookie à 1
    setcookie('nbvisites', 1, time() + 3600);  // expire dans 1 heure
    $nbVisites = 1;  // Affiche le compteur réinitialisé
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites</title>
</head>
<body>
    <h1>Bienvenue sur la page</h1>
    <p>Vous avez visité cette page <strong><?php echo $nbVisites; ?></strong> fois.</p>
    
    <!-- Formulaire pour réinitialiser le compteur -->
    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>
</html>
