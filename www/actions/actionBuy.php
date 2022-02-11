
<?php  
session_start();
if(!isset($_SESSION['tabAchat'])){
    $_SESSION['tabAchat'] = array();
};
$article = $_POST['article'];
array_push($_SESSION['tabAchat'],$article);
header('Location:/index.php?p=panier');
; ?>
