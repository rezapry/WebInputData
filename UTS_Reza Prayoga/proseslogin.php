<?php
session_start();
$_SESSION["username"]="admin";
$_SESSION["password"]="123";
if (isset($_POST["login"])){
    if ($_POST["username"]=="admin" && $_POST["password"]=="123"){
        header("location:admin.php");
    }else{
        echo "Maaf Username Atau Password Salah !";
    }
}
?>