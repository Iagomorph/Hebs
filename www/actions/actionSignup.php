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
    $mdpUser = hash('sha256',$_POST['mdp']);
    $username = $_POST['username'];
};

$parameters=array(':email'=> $mail_user, ':mdp' => $mdpUser, ':username' => $username,':admin'=> 0);
$dbManager->insert('user(mail, mdp, username, admin)','(:email, :mdp, :username, :admin)',$parameters);


header("Location: /index.php?p=signup&successful=1");
?>