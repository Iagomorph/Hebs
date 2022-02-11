

<body>
<?php 
$tabAchat = $_SESSION['tabAchat'];
for($i=0;$i<$tabAchat;$i++){
    echo("<li>$tabAchat</li>");
};
?>
    <button type="submit" action="actions/actionBuy">Finaliser Ma Commande</button>
</body>
</html>