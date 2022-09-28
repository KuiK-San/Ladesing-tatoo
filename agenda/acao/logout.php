<?php
session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);
unset($_SESSION['nivel']);


header('location: ../login.php');

?>