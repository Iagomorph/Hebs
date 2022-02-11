<?php  
$userPromote = $_POST['userPromote'] ;


$parameters = array(':id' => $userPromote, ':admin' => '1');
$dbManager->update('user','id = :id', $parameters,'WHERE id = :id');

?>
