
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>

</head>
<body>
    <div class="productGrid">
        <?php
            require_once '/Users/heloise/Documents/PHP/Hebs/src/db.php';
            $req = $db->query("SELECT * FROM article");
            $req->execute();
            $result = $req->fetchAll(); 

            for ($i=0; $i < count($result); $i++) {
                echo ('<div class="productCard" data-attr="'.$result[$i]["idArticle"].'">');
                echo ('<div class="divImg">');
                echo ('<img class="imgPdt" src="'.$result[$i]["image"].'"  ></img>');
                echo ("</div>");
                echo ('<div class="divTxt">');
                echo ('<p class="productName">'.$result[$i]["nom"].'</p>');
                echo ('<p class="productPrice">'.$result[$i]["prix"].'€</p>');
                echo ("</div>");
                echo ("</div>");

            }

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
