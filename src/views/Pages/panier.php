

<body>
<?php 
$tabAchat = $_SESSION['tabAchat'];
for($i=0;$i< count($tabAchat);$i++){
    echo("<li>$tabAchat[$i]</li>");
};
?>
    <button type="submit" action="actions/actionBuy">Finaliser Ma Commande</button>
</body>
</html>