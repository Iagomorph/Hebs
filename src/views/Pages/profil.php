<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
</head>
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
        <button type="submit" >Mettre en Vente</button>
    </form>
    
</body>
</html>