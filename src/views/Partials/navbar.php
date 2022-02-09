<header class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
        <?php $currentPage = 'index'; ?>
    <?php

$pages = array(
    "home" => "MarketPlace", 
    "signup" => "S'Inscrire", 
    "login" => "Se Connecter", 
    "profil" => "Mon Profil"
); 
$p = (isset($_GET['p'])) ? $_GET['p'] : "";
foreach ($pages as $url => $label) {
?>
<li><a <?= $p == $url ? 'class="active"' : ""?> href="index.php?p=<?=$url?>" > <?=$label?> </a></li>
<?php
}
?>