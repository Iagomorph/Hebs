<?php  
require_once '../../src/db.php';

$userPromote = $_POST['userPromote'] ;


$parameters = array(':id' => $userPromote, ':admin' => 1);
$dbManager->update('user','admin = :admin', $parameters,'WHERE idUser = :id');

header('Location:/index.php?p=admin');


?>
