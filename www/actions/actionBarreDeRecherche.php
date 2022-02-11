<?php
    session_start();
    require_once '../../src/db.php';

    $tag = $_POST['recherche'];
    $parameters = array(':tag'=>$tag);
    $articles = $dbManager->select('*','article',$parameters,'WHERE tag=:tag');

    if(empty($articles)){
        header("Location: /index.php?p=article&erreur=1");
    }
    else{
        $_SESSION['articles']= $articles;
        header("Location: /index.php?p=article");
    }
?>