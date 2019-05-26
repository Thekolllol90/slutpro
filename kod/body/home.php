<?php include '../db.php'; 
session_start();    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../produkt/pro.css">
    <link rel="stylesheet" href="../produkt/mysql/name.css">
    <link rel="stylesheet" href="../burger_menu/burger.css">

</head>

<body id="body2">
    <div id="menu">
        <ul>
            <li class="menu-item"><a href="home.php">Hem</a></li>
            <li class="menu-item"><a href="produkter.php">Produkter</a></li>
            <li class="menu-item"><a href="bildgalleri.php">Bildgalleri</a></li>
            <li class="menu-item"><a href="om%20oss.php">Om oss</a></li>
            <li class="menu-item"><a href="loggin.php">Loggin/Register</a></li>
            <li class="menu-item"><a href="profile.php">profil</a></li>
        </ul>
    </div>
    <header id="head"> <?php include '../header/header.php';?> </header>
    <div id="body">
        <div id="parallax"></div>
        <div id="flexx">
            <audio id="audio" controls style="width: 300px">
                <source src="Metallica%20-%20Sad%20But%20True%20(SYN%20Remix)%20%5BDUBSTEP%5D.mp3" type="audio/mp3">
            </audio>
                <div id="titel">
                    <p>PRODUKTER</p>
                </div>
            <div class="pro"><?php include '../produkt/pro.php'?></div>
        </div>
        <footer><?php include '../footer/footer.php' ?></footer>
    </div>
</body>

</html>
