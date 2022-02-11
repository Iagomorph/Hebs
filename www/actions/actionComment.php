<?php 
session_start();
require_once '../../src/db.php';
?>
<?php
if (empty($_POST['comment'])){
    header("Location: /index.php?p=comment&erreur=1");
    exit;
}
else {
    $commentaire = $_POST['comment'];
};


$parameters=array(':com' => $commentaire);
$dbManager->insert('commentaire(idCom,idUser,com)','(:com)',$parameters);


header("Location: /index.php?p=comment&successful=1");
?>