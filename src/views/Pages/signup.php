<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<?php
    require_once '../src/init.php'; ?>
    <h2>Créer un compte</h2>
    <form action="actions/actionSignUp.php" method="POST" >
        <label for="">Pseudo :</label>
        <input type="text" name="username" placeholder="pseudonyme">
        <label for="">Adresse mail :</label>
        <input type="text" name ="mail" placeholder="Adresse mail"> <br>
        <label for="">Mot de passe :</label>
        <input type="text" name = "mdp" placeholder="Mot de passe"> <br>
        <button type="submit" >S'inscrire</button>
    </form>
</body>
</html>