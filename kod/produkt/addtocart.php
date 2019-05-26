<?php
    include '../db.php';
    session_start();
    if(isset($_POST['submit'])){
        if(isset($_POST['id']) && !empty($_POST['id'])){
            if(isset($_SESSION['cart'])){
                array_push($_SESSION['cart'], $_POST['id']);
            }else{
                $_SESSION['cart'] = array($_POST['id']);
            }
        }
    }                
    header("location: ../body/produkter.php");
    exit();
?> 