<?php include '../db.php';
session_start(); 

    $id = $_SESSION['id'];
    $query = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    
    if(isset($_POST['add']) && isset($_POST['pas'])){
        $add = $_POST['add'];
        $pas = $_POST['pas'];
        if($pas === $row['password']){
            $query = "UPDATE user SET adress = '$add' WHERE id = '$id'";
            mysqli_query($conn,$query);
            header("location: profile.php");
            exit();
        }
    }
    if(isset($_POST['pas2']) && isset($_POST['newPas']) && isset($_POST['conPas'])){
        $pas = $_POST['pas2'];
        $pas2 = $_POST['newPas'];
        $pas3 = $_POST['conPas'];
        if($pas === $row['password'] && $pas2 == $pas3){
            $query = "UPDATE user SET password = '$pas2' WHERE id = '$id'";
            mysqli_query($conn,$query);
            header("location: profile.php");
            exit();
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="profile.css">
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
        <div id="flexx">
            <div id="titel">
                <p>Profil</p>
            </div>
            <div id="dinprofil">
                <p>Namn: <?php echo $row['name']; ?></p> <br>
                <p>Email: <?php echo $row['email']; ?> </p> <br>
                <p>Adress: <?php echo $row['adress']; ?></p> <br>
                <p>Logout: </p> <br>
                <input type="submit" name="sub" id="send">
            </div>
            <div id="addres">
                <form action="profile.php" method="post">
                    <h3>Ändra adress:</h3>
                    <p>Nuvarande adress: <?php echo $row['adress']; ?></p>
                    <p>Ny adress:</p>
                    <input type="text" name="add" class="box2"><br>
                    <p>Lösenord:</p>
                    <input type="password" name="pas" class="box2"><br>
                    <input type="submit" name="sub" id="send">
                </form>
            </div>
            <div id="password">
                <form action="profile.php" method="post">
                    <h3>Ändra lösenord:</h3>
                    <p>Lösenord:</p>
                    <input type="password" name="pas2" class="box2"><br>
                    <p>Nytt lösenord:</p>
                    <input type="password" name="newPas" class="box2"><br> <p>Bekräfta lösenord:</p>
                    <input type="password" name="conPas" class="box2"><br>
                    <input type="submit" name="sub" id="send">
                </form>
            </div>
        </div>
        <footer><?php include '../footer/footer.php' ?></footer>
    </div>
</body>

</html>
