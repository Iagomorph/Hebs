

<?php 

$userTab = $dbManager->select('*','user');

for($i=0;$i< count($userTab);$i++){
    foreach ($userTab[$i] as $key => $value) {
        if($key == 'idUser'){
            echo "<li> L'id de l'user est = $value ";
        };
        if($key == 'username'){
            echo "et son pseudo est $value </li>";
        };
    }
};
?>
<form action="actions/actionAdminDel.php" method="post">
    <label for="">Inséré l'id de l'utilisateur à supprimer : </label>
    <input type="int" name="userDel">
    <button type="submit">Supprimer L'Utilisateur</button>
</form>

<form action="actions/actionAdminPromote.php" method="post">
    <label for="">Inséré l'id de l'utilisateur à promouvoir : </label>
    <input type="text" name="userPromote">
    <button type="submit">promouvoir en Admin</button>
</form>




