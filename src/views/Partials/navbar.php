<header>
<nav>
  <a href="index.php?p=home">Marketplace</a>
  <?php
    if(!empty($_SESSION['id'])){
    ?>
    <a href="index.php?p=profil">Mon profil</a>
    <a href="index.php?p=panier">Mon panier</a>
    <a href="actions/actionLogout.php">Déconnexion</a>
    <?php
    }else{
    ?>
    <a href="index.php?p=signup">S'inscrire</a>
    <a href="index.php?p=login">Connexion</a>
    <?php
    };
    ?>
</nav>
</header>