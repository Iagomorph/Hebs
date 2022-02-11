<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <p>Le Hèbs MarketPlace</p>
<?php
    require_once '../src/init.php'; ?>
<?php 
//recup tout les articles de la base de données
//les écrire automatiquement avec leur valeurs respectives pour la desc/prix etc...
$allArticle = $dbManager->select('*','article',$parameters,'WHERE username = :user and mdp = :mdp');

$dbMa
?>

</body>

</html>