<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Le Hèbs</title>
</head>

<?php     include '../src/views/partials/navbar.php';?>
<body>
<?php
    require_once '../src/init.php'; ?>
<?php  
$p = (isset($_GET['p'])) ? $_GET['p'] : "";
    switch ($p) {
    case "login":
        include "../src/views/pages/login.php";
        break;
    case "profil":
        include "../src/views/pages/profil.php";
        break;
    case "signup":
        include "../src/views/pages/signup.php";
        break;
    case "home":
        include "../src/views/pages/home.php";
        break;
    case "panier":
        include "../src/views/pages/panier.php";
        break;
    case "admin":
        include "../src/views/pages/admin.php";
        break;
    case "article":
        include "../src/views/pages/article.php";
        break;
    case "post":
        include "../src/views/pages/post.php";
        break;

    };
?>
</body>
<footer>
<?php      include '../src/views/partials/footer.php'; ?>
</footer>


<script src="assets/js/script.js"></script>

</html>