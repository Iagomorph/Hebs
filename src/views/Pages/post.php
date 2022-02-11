<?php 
    require_once ('../src/class/dbManager.php');
    $p = (isset($_GET['id'])) ? $_GET['id'] : "";
    $parameters = array(':id'=> $p);
    $result = $dbManager->select('*','article',$parameters,'WHERE idArticle=:id');
    $parameters2 = array(':id'=> $result[0]['idUser']);
    $user = $dbManager->select('username','user',$parameters2,'WHERE idUser=:id');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <div class="fichePdt"> 
    <form class="article" action="actions/actionBuy.php" methode="post">
            <div class="titre"> 
                <h1>
                <?php  echo $result[0]["nom"]; ?>
                </h1>

                <p class="nomUser">Mis en ligne par :
                    <?php  echo $user[0]["username"];  ?>
                </p>

                <p class="tag">
                    <?php  echo $result[0]["tag"]; ?>
                </p>
            </div> 
            <div class="divImg">
                <img class="image" src="<?php  echo $result[0]["image"]; ?>" alt="Image du produit">
            </div>
            <div class="informations">

                <p class="prix"> <?php  echo $result[0]["prix"]; ?>€ 
                <input class="btnPanier" type="submit" value="Ajouter au panier"> </input> </p>
                <p class ="desc">Description </br>
                <?php  echo $result[0]["description"]; ?></p>
            </div>
        </form>
    </div>
</body>
</html>