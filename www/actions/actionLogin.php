<?php session_start(); 
require_once '../../src/db.php';
?>

<?php

$username = $_POST['username'];
$mdp = $_POST['mdp'];

$parameters = array(':user'=>$username, 'mdp'=>$mdp);
$dataTab = $dbManager->select('*','User','WHERE username = :user and mdp = :mdp',$parameters);

for($i = 0;$i<count($dataTab);$i++){

}

// $sql ='SELECT * FROM Users WHERE email = :email and mdp = :mdp';

// $querry = $db->prepare($sql);

// $querry->execute([
//     ':email'=> $email,
//     ':mdp'=> $mdp
// ]);

// $user = $querry->fetch(PDO::FETCH_ASSOC);
// if($user == false){
//     header("Location: /index.php?p=login&erreur=1");
// }
// foreach ($user as $key => $value) {
//     if($key == 'id'){
//         $_SESSION['id'] = $value;
//         header("Location: /index.php?p=login&successful=1");
//     }

?>