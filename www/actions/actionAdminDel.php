<?php 

        require_once '../../src/db.php';

        $userDel = $_POST['userDel'] ;

        $parameters = array(':id' => intval($userDel, $base = 10));
        $dbManager->delete('user','idUser = :id',$parameters);

        header('Location:/index.php?p=admin');

?>

