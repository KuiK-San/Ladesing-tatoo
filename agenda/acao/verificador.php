<?php

session_start();

if (isset($_SESSION['usuario']) == false) {
    unset($_SESSION['usuario']);

    header('location: ./login.php');
}
?>