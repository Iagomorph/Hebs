<?php $userDel = $_POST['userDel'] ;

        $parameters = array(':id' => $idUser);
        $dbManager->delete('User','id = :id',$parameters);

?>

