<header>
  <div class="divNav">
<nav>
  <a href="index.php?p=article">Marketplace</a>
  <?php
    if(!empty($_SESSION['id'])){
    ?>
    <a href="index.php?p=profil">Mon profil</a>
    <a href="index.php?p=panier">Mon panier</a>
    <a href="actions/admin.php">Modération</a>
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
</div>
</header>