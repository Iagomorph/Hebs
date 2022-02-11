
<?php  
session_start();
require_once '../../src/db.php';

if(isset($_POST['del'])){
    $parameters = array(':id' => intval($_POST['del'], $base = 10) );
    $dbManager->delete('commentaire','idArticle = :id',$parameters);
    $dbManager->delete('article','idArticle = :id',$parameters);
    header('Location:/index.php?p=article');

}else{
    if(!isset($_SESSION['tabAchat'])){
        $_SESSION['tabAchat'] = array();
    };
    $article = $_POST['article'];
    array_push($_SESSION['tabAchat'],$article);
    header('Location:/index.php?p=panier');
}
?>
