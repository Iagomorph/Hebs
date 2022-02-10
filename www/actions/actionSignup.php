<?php
session_start();
require_once '../../src/db.php';
?>
<?php
if (empty($_POST['mail']) && empty($_POST['mdp'])){
    header("Location: /index.php?p=signup&erreur=1");
    exit;
}
else {
    $mail_user = $_POST['mail'];
    $mdpUser = $_POST['mdp'];
    $username = $_POST['username'];
};


$parameters=array(':email'=> $mailUser, ':mdp' => $mdpUser, ':username' => $username);
$dbManager->insert('User(mail, mdp, username)','(:email, :mdp, :username)',$parameters);


header("Location: /index.php?p=signup&successful=1");
?>