<?php 
session_start();
require_once '../../src/db.php';
?>
<?php
if (empty($_POST['com'])){
    header("Location: /index.php?p=post&id=" .$_SESSION['idPost']);
    exit;
}
else {
    $commentaire = $_POST['com'];
};


$parameters=array(':idUser'=> $_SESSION['id'], ':idArticle' => $_SESSION['idPost'],':com'=> $commentaire);
$dbManager->insert('commentaire(idUser,idArticle,com)','(:idUser,:idArticle,:com)',$parameters);

header("Location: /index.php?p=post&id=" .$_SESSION['idPost']);
?>