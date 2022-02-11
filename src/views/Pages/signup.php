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
    <!-- <h2>Créer un compte</h2>
    <form action="actions/actionSignup.php" method="POST" >
        <label for="">Pseudo :</label>
        <input type="text" name="username" placeholder="pseudonyme">
        <label for="">Adresse mail :</label>
        <input type="text" name ="mail" placeholder="Adresse mail"> <br>
        <label for="">Mot de passe :</label>
        <input type="text" name = "mdp" placeholder="Mot de passe"> <br>
        <button type="submit" >S'inscrire</button>
    </form> -->
    <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" action ="actions/actionLogin.php" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="username" placeholder="Username">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="text" class="login__input" name="mail" placeholder="Adresse mail">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="mdp" placeholder="Password">
				</div>
				<button class="button login__submit" type="submit">
					<span class="button__text">S'inscrire</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>
</html>