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
                <h1>Nom du produit</h1> 
                <p class="nomUser">Mis en ligne pas Nom du user</p>
                <p class="tag"> tag </p>
            </div> 
            <div class="divImg">
                <img class="image" src="https://images.unsplash.com/photo-1518388711175-fc28d3f6ade5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTkyfHxmbG93ZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=900&q=60" alt="Image du produit">
            </div>
            <div class="informations">

                <p class="prix">128 988€
                <input class="btnPanier" type="submit" value="Ajouter au panier"> </input> </p>
                <p class ="desc">Description </br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac arcu in nulla mattis imperdiet id ac ex. Morbi metus eros, eleifend nec massa eu, dignissim luctus eros. Aliquam pretium velit placerat, tempor orci vel, finibus ex. Suspendisse eget leo ipsum. Nunc quis ante ipsum. Etiam blandit massa accumsan turpis pellentesque accumsan sed vitae lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque tempor accumsan molestie. Vestibulum</p>
            </div>
        </form>
    </div>
</body>
</html>