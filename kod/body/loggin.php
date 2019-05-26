<?php include '../db.php'; 

session_start();    
 
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $pas = $_POST['password'];

        $query = "SELECT * FROM user WHERE email = '$email'";

        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) > 0){

            $query = "SELECT password FROM user WHERE email = '$email'";

            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            
            $query = "SELECT id FROM user WHERE email = '$email'";
            $result = mysqli_query($conn,$query);

            if($pas === $row["password"]){
                $row = mysqli_fetch_array($result);
                
                $_SESSION["loggin"] = true;
                $_SESSION["id"] = $row["id"];
                
                header("location: home.php");
                exit();
            }
        }


    }


    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['addres'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pas = $_POST['password'];
        $age = $_POST['age'];
        $add = $_POST['addres'];

        $query = "SELECT * FROM user WHERE email = '$email'";

        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) > 0){
            header("location: loggin.php?error=finns_redan");
            exit();
        }else {
            $query = "INSERT INTO user (name,email,password,age,adress) VALUES ('$name','$email','$pas','$age','$add')";

            mysqli_query($conn,$query);
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
    <link rel="stylesheet" href="loggin.css">
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
                <p>LOGGIN / REGISTER</p>
            </div>
            <div id="loggin">
                <h2>LOGGIN:</h2>
                <p class="email">Email:</p>
                <form action="loggin.php" method="post">
                    <input type="email" name="email" class="box2"><br>
                    <p class="email">Lösenord:</p>
                    <input type="password" name="password" class="box2"><br>
                    <div id="space"></div>
                    <input type="submit" name="sub" id="send">
                </form>
            </div>
            <div id="register">
                <h2>REGISTER:</h2>
                <form action="loggin.php" method="post">
                    <p class="email">För- och efternamn:</p>
                    <input type="text" name="name" class="box2"><br>
                    <p class="email">Email:</p>
                    <input type="email" name="email" class="box2"><br>
                    <p class="email">Lösenord:</p>
                    <input type="password" name="password" class="box2"><br>
                    <p class="email">Ålder:</p>
                    <input type="text" name="age" class="box2"><br>
                    <p class="email">Addres:</p>
                    <input type="text" name="addres" class="box2"><br>
                    <div id="space"></div>
                    <input type="submit" name="sub" id="send">
                </form>
            </div>
        </div>
        <footer><?php include '../footer/footer.php' ?></footer>
    </div>



</body>

</html>