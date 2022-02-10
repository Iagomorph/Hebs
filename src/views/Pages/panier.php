<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>


<body>
<?php 
$tabAchat =$_SESSION['tabAchat'];
for($i=0;$i<$tabAchat;$i++){
    echo("<li>$tabAchat</li>");
};
?>
    <button type="submit" action="actions/actionBuy">Finaliser Ma Commande</button>
</body>
</html>