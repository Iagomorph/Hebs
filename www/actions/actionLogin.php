<?php session_start(); 
require_once '../../src/db.php';
?>

<?php
$mdp = hash('sha256',$_POST['mdp']);

$parameters = array(':user'=>$username, ':mdp'=>$mdp);
$dataTab = $dbManager->select('*','user',$parameters,'WHERE username = :user and mdp = :mdp');

if(empty($dataTab)){
    //header("Location: /index.php?p=login&erreur=1");
    var_dump($dataTab);
}else{
    var_dump($dataTab);
    foreach ($dataTab[0] as $key => $value) {
        if($key == 'idUser'){
            $_SESSION['id'] = $value;
            echo 'test';
            header("Location: /index.php?p=login&successful=1");
        };
};
};


?>