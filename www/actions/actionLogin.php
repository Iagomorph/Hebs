<?php session_start(); 
require_once '../../src/db.php';
?>

<?php

$username = $_POST['username'];
$mdp = $_POST['mdp'];

$parameters = array(':user'=>$username, 'mdp'=>$mdp);
$dataTab = $dbManager->select('*','ser','WHERE username = :user and mdp = :mdp',$parameters);

$_SESSION['id'] = $dataTab[0];


?>