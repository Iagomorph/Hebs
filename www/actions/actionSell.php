<?php
session_start();
require_once '../../src/db.php';
?>
<?php  
$price = $_POST['sellPrice'];
$name = $_POST['sellName'];
$desc = $_POST['sellDesc'];
$img = $_POST['sellImg'];
$id = $_SESSION['id'];

$parameters=array(':prix'=> $price, ':nom' => $name, ':description' => $desc, ':image' => $img, ':idUser' => $id);
$dbManager->insert('article(idArticle, idUser, nom, image, description, prix)','(:idUser, :nom, :iamge, :description, :prix)',$parameters);

?>
