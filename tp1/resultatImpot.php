<?php

require 'impot.php';



if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $revenu = $_POST['revenu'];

    $personne = new Personne($nom, $revenu);

    $calculImpot = new Impot();
    $message = $calculImpot->AfficheImpot($personne);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultat de l'impôt</title>
</head>
<body>
    <h1>Résultat de l'impôt</h1>
    <p><?php if (isset($message)) echo $message; ?></p>
    <a href="index.php">Retour au formulaire</a>
</body>
</html>

