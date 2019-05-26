<?php include '../db.php'; ?>
<?php
session_start();    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="bildgalleri.css">
    <link rel="stylesheet" href="../produkt/pro.css">
    <link rel="stylesheet" href="../produkt/mysql/name.css">
    <link rel="stylesheet" href="../burger_menu/burger.css">

</head>

<body>
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
        <div id="flexx">
            <div id="titel">
                <p>BILDGALLERI</p>
            </div>
            <div id="hot">
                <img src="images.jpg" usemap="#image-map">

                <map name="image-map">
                    <area target="" alt="pink" title="pink" href="home.php" coords="30,164,30" shape="circle">
                    <area target="" alt="pink" title="pink" href="home.php" coords="107,169,31" shape="circle">
                    <area target="" alt="pink" title="pink" href="home.php" coords="18,99,31" shape="circle">
                    <area target="" alt="do" title="do" href="produkter.php" coords="227,165,26" shape="circle">
                    <area target="" alt="do" title="do" href="produkter.php" coords="209,29,34" shape="circle">
                    <area target="" alt="white" title="white" href="om%20oss.php" coords="38,25,28" shape="circle">
                    <area target="" alt="white" title="white" href="om%20oss.php" coords="114,28,32" shape="circle">
                </map> </div>
            <div id="bilderna">
                <img class="bilder" src="../produkt/produkter/crossant.jpg">
                <img class="bilder" src="../produkt/produkter/Simpsons.jpg">
                <img class="bilder" src="../produkt/produkter/boi.jpg">
                <img class="bilder" src="../produkt/produkter/man.jpg">
                <img class="bilder" src="../produkt/produkter/donuts_socker.jpg">
                <img class="bilder" src="../produkt/produkter/donuts.jpg">
                <img class="bilder" src="../produkt/produkter/man.jpg">
                <img class="bilder" src="../produkt/produkter/donuts_socker.jpg">
                <img class="bilder" src="../body/bageri.png">
                <img class="bilder" src="../produkt/produkter/donuts.jpg">
                <img class="bilder" src="../produkt/produkter/crossant.jpg">
                <img class="bilder" src="../produkt/produkter/star.png">

            </div>
        </div>
        <footer><?php include '../footer/footer.php' ?></footer>
    </div>
</body>

</html>
