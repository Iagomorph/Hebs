<?php 
    require_once ('../src/db.php');
    $p = (isset($_GET['id'])) ? $_GET['id'] : "";
    $parameters = array(':id'=> $p);
    $_SESSION['idPost'] = $p;
    $result = $dbManager->select('*','article',$parameters,'WHERE idArticle=:id');
    $parameters2 = array(':id'=> $result[0]['idUser']);
    $user = $dbManager->select('*','user',$parameters2,'WHERE idUser=:id');    

?>

<body>
    <div class="fichePdt"> 
    <form class="article" action="actions/actionBuy.php" method="POST">
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
            <input type="hidden" name="article" value= "<?=$result[0]["nom"]?>" >

                <p class="prix"> <?php  echo $result[0]["prix"]; ?>€ 
                <input class="btnPanier" type="submit" value="Ajouter au panier"> </input>
                <?php
                if($user[0]['admin']== 1){
                    ?>
                    <input type="hidden" name="del" value= "<?=$p?>" >
                    <input class="btnPanier" type="submit" value="Supprimer l'article"> </input></p>
                    <?php
                    }else{
                        ?>
                        </p>
                        <?php
                    };
                ?>
                <p class ="desc">Description </br>
                <?php  echo $result[0]["description"]; ?></p>
            </div>
        </form>
    </div>
    <div>
        <form action="actions/actionComment.php" method = 'post'>
            <input type="textArea" name="com" placeholder="veuillez entrer votre commentaire">
            <input type="submit" placeholder = "poster">
        </form>
        <?php
            $parameters3 = array(':idArticle'=> $p);
            $commentaires = $dbManager->select('*','commentaire',$parameters3,'WHERE idArticle = :idArticle');
            for ($i=0; $i < count($commentaires); $i++) { 
                $parameters4 = array(':id'=>$commentaires[$i]['idUser']);
                $userCom = $dbManager->select('username','user',$parameters4,'WHERE idUser=:id');
                ?>
                <div class = "commentaire">
                    <p class ="commenteur"><?= $userCom[0]['username']?></p>
                    <p class =""><?= $commentaires[$i]['com']?></p>
                </div>
                <?php
            };
        ?>

    </div>
</body>
</html>