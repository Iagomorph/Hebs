
<body>
<label for="">Créer une offre : </label>
<form action="actions/actionSell.php" method="POST" >
        <label for="">nom du produit :</label>
        <input type="text" name ="sellName" placeholder="produit"> <br>
        <label for="">Prix :</label>
        <input type="text" name = "sellPrice" placeholder="prix"> <br>
        <label for="">Description :</label>
        <input type="text" name = "sellDesc" placeholder="description"> <br>
        <label for="">Image :</label>
        <input type="text" name = "sellImg" placeholder="image url"> <br>
        <label for="">Tag :</label>
        <input type="text" name = "sellTag" placeholder="tag"> <br>
        <button type="submit" >Mettre en Vente</button>
    </form>

    <div class="productGrid">
    <?php

    $parameters = array(':idUser' => $_SESSION['id']);
    $article_user = $dbManager->select('*','article',$parameters,'WHERE idUser = :idUser');

    for ($i=0; $i < count($article_user); $i++) {
        echo ('<div class="productCard" data-attr="'.$article_user[$i]["idArticle"].'">');
        echo ('<div class="divImg">');
        echo ('<img class="imgPdt" src="'.$article_user[$i]["image"].'"  ></img>');
        echo ("</div>");
        echo ('<div class="divTxt">');
        echo ('<p class="productName">'.$article_user[$i]["nom"].'</p>');
        echo ('<p class="productPrice">'.$article_user[$i]["prix"].'€</p>');
        echo ("</div>");
        echo ("</div>");

    }
?>
</div>

</body>
</html>