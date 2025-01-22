<?php
    //On démarre une nouvelle session
session_start();

if (isset($_SESSION['nbvisites'])) {
    if ($_SESSION == 0) 
    {
        echo "bienvenue";
    } else {
        echo "vous avez deja visite ce site ".$_SESSION['nbvisites']." fois<br><br>";
    }
}

if (isset($_POST['reset'])) {
    $_SESSION["nbvisites"] = 0;
}

$_SESSION ['nbvisites']++;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="reset" value="reset">    
    </form>
</body>
</html>