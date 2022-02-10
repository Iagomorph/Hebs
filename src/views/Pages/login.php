<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>


<body>
    <h2>Bienvenue</h2>
    <p>Identifiez Vosu</p>
<?php require_once '../src/init.php'; ?>
    <form action="actions/actionLogin.php" method="POST" >
        <label for="">Username :</label>
        <input type="text" name ="username" placeholder="Pseudonyme"> <br>
        <label for="">Mot de passe :</label>
        <input type="text" name = "mdp" placeholder="Mot de passe"> <br>
        <button type="submit" >Se Connecter</button>
    </form>
<?php
$erreur = (isset($_GET['erreur'])) ? $_GET['erreur'] : "";
if($erreur == '1'){
?>
<p>veuillez rentrer des champs valide</p>
<?php
};
?>
<?php
$successful = (isset($_GET['successful'])) ? $_GET['successful'] : "";
if($successful == '1'){
?>
<p>vous vous êtes connecté avec succès</p>
<?php
};
?>
</body>


</html>