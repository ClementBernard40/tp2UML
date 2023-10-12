<!DOCTYPE html>
<html>
<head>
    <title>Calcul de l'impôt</title>
</head>
<body>
    <h1>Calcul de l'impôt</h1>
    <form action="resultatImpot.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label for="revenu">Revenu :</label>
        <input type="number" name="revenu" required><br><br>

        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>
