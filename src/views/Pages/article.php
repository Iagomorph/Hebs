<?php
require_once '../src/db.php';
?>
<body>
    <?php
        $erreur = (isset($_GET['erreur'])) ? $_GET['erreur'] : "";
        if($erreur == '1'){
            ?>
        <form action="actions/actionBarreDeRecherche.php" method="Post">
            <input type="text" name="recherche" placeholder="veuillez taper votre recherche">
            <button type="submit">Chercher</button>
        </form>
        <p>le tag de recherche n'est pas valide</p>
        <?php
        }else{
            ?>
        <form action="actions/actionBarreDeRecherche.php" method="Post">
            <input type="text" name="recherche" placeholder="veuillez taper votre recherche">
            <button type="submit">Chercher</button>
        </form>
            <?php
        };
    ?>
    <div class="productGrid">
        <?php
        if(isset($_SESSION['articles'])){
            $articles = $_SESSION['articles'];
        }else{

            $req = $db->query("SELECT * FROM article");
            $req->execute();
            $articles = $req->fetchAll();

        };

            for ($i=0; $i < count($articles); $i++) {
                echo ('<div class="productCard" data-attr="'.$articles[$i]["idArticle"].'">');
                echo ('<div class="divImg">');
                echo ('<a href="index.php?p=post&id='.$articles[$i]["idArticle"].'">');
                echo ('<img class="imgPdt" src="'.$articles[$i]["image"].'"></img>');
                echo ("</a>");
                echo ("</div>");
                echo ('<div class="divTxt">');
                echo ('<p class="productName">'.$articles[$i]["nom"].'</p>');
                echo ('<p class="productPrice">'.$articles[$i]["prix"].'€</p>');
                echo ("</div>");
                echo ("</div>");

            }

            unset($_SESSION['articles']);

            ?>
       </div>
     </body>
     <script>

        document.addEventListener("click",(e)=>{
         if (e.target.classList.contains("productCard")) {
          let dataAttr = e.target.getAttribute("data-attr");
          console.log(dataAttr)
        //   $idArt = dataAttr;
        // <?php    
        //   $idArt = dataAttr; 
        //   $_SESSION["dataAttr"] = $idArt;
        // ?>

         } else if (e.target.parentNode.classList.contains("productCard")) {
             let dataAttr  = e.target.parentNode.getAttribute("data-attr");
            console.log(dataAttr) 
         } else if (e.target.parentNode.parentNode.classList.contains("productCard")) {
            let dataAttr = e.target.parentNode.parentNode.getAttribute("data-attr");
            console.log(dataAttr)
        
         }
        //  <?php 
            
        //      $_SESSION["dataAttr"] = dataAttr;
        // ?>


        });

    </script>
</html>
