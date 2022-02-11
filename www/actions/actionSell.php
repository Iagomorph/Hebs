<?php
session_start();
require_once '../../src/db.php';
?>
<?php  
$price = $_POST['sellPrice'];
$name = $_POST['sellName'];
$desc = $_POST['sellDesc'];
$img = $_POST['sellImg'];
$idUser = $_SESSION['id'];
$tag = $_POST['sellTag'];

$parameters=array(':prix'=> $price, ':nom' => $name, ':description' => $desc, ':image' => $img, ':idUser' => $idUser, ':tag'=>$tag);
$dbManager->insert('article(idUser, nom, image, description, prix, tag)','(:idUser, :nom, :image, :description, :prix, :tag)',$parameters);
header('Location:/index.php?p=profil');

?>
