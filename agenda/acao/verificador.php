<?php

session_start();

if (!(isset($_SESSION['usuario'])) == true && !(isset($_SESSION['email'])) == true) {
    unset($_SESSION['usuario']);
    unset($_SESSION['email']);
    unset($_SESSION['nivel']);

    header('location: ./login.php');
    die();
}
?>