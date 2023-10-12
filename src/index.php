<?php
require '../classes/CompteBancaire.php';

if (isset($_POST['action'])) {
    $compte = new CompteBancaire();

    if ($_POST['action'] === 'depot') {
        $montant = $_POST['montant'];
        $compte->depot($montant);
    } elseif ($_POST['action'] === 'retrait') {
        $montant = $_POST['montant'];
        $compte->retrait($montant);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion de Compte Bancaire</title>
</head>
<body>
    <h1>Gestion de Compte Bancaire</h1>

    <form action="index.php" method="post">
        <label for="montant">Montant :</label>
        <input type="number" name="montant" required><br><br>

        <button type="submit" name="action" value="depot">Dépôt</button>
        <button type="submit" name="action" value="retrait">Retrait</button>
    </form>

    <?php
    if (isset($compte)) {
        $compte->affiche();
    }
    ?>
</body>
</html>
