<?php
if(!isset($_SESSION)){
    session_start(); //verificar se tem seção ativa, se não starta a sessão;
}

if (!(isset($_SESSION['usuario'])) == true && !(isset($_SESSION['email'])) == true) {
    unset($_SESSION['usuario']);
    unset($_SESSION['email']);
    unset($_SESSION['nivel']);

    header('location: ./login.php');
    die();
}
?>