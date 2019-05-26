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
    <link rel="stylesheet" href="om%20oss.css">
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
                   <div id="titel">
                <p>OM OSS</p>
            </div>
        <div id="flexx">
            <div id="time">
                <div class="topText">Öppetider</div>
                <div class="cont">Måndag: 08:00 - 20:00</div>
                <div class="cont">Tisdag: 08:00 - 20:00</div>
                <div class="cont">Onsdag: 10:00 - 20:00</div>
                <div class="cont">Torsdag: 10:00 - 20:00</div>
                <div class="cont">Fredag: 10:00 - 18:00</div>
                <div class="cont">Lördag: 10:00 - 16:00</div>
                <div class="cont">Söndag: Stängt</div>
            </div>
            <div id="inf">
                <div class="topText">Information</div>
                <div class="cont">Personal: Frank(ägare), Fredrik(bagare), Jakob(städare), Theo(bagare).</div>
                <div class="cont">Om lokalen: Nyligen renoverat, städas hela tiden och väldigt fräscht.</div>
                <div class="cont">Addres: mjölborgatan 5</div>
            </div>
            <div id="tak">
                <div class="topText">Kontakt</div>
                <div class="cont">kundservies: 0708150148</div>
                <div class="cont">Frank: 0784105180</div>
                <div class="cont">Fredrik: 0710240276</div>
                <div class="cont">Jakob: 0727538211</div>
                <div class="cont">Theo: 0730210519</div>
            </div>

        </div>
        <footer><?php include '../footer/footer.php' ?></footer>
    </div>
</body>

</html>
