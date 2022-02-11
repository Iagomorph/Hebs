

<?php 
$parameters = array(':user'=>$username, ':id' => $id);
$userTab = $dbManager->select('*','user',$parameters);

for($i=0;$i<$userTab;$i++){
    echo("<li>$userTab[$i]['idUser'] : $userTab[$i]['username']</li>");
};
?>
<form action="actions/actionAdminDel.php" method="post">
    <label for="">Inséré l'id de l'utilisateur à supprimer : </label>
    <input type="text" name="userDel">
    <button type="submit">Supprimer L'Utilisateur</button>
</form>

<form action="actions/actionAdminPromote.php" method="post">
    <label for="">Inséré l'id de l'utilisateur à promouvoir : </label>
    <input type="text" name="userPromote">
    <button type="submit">promouvoir en Admin</button>
</form>




