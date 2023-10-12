<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titre</title>
</head>
<body>

<?php 

require ('classe/CompteBancaire');


$compteBancaire1 = new CompteBancaire();
$compteBancaire2 = new CompteBancaire();
$compteBancaire3 = new CompteBancaire('Clement', 3000);

$compteBancaire1->depot(100);
$compteBancaire1->retrait(50);

$compteBancaire2->depot(2000);
$compteBancaire2->retrait(500);

?>

<h1><?= $compteBancaire1->affiche(); ?> $<h1>
<h1><?= $compteBancaire2->affiche(); ?> $<h1>
<h1><?= $compteBancaire3->affiche(); ?> $<h1>

</body>
</html>