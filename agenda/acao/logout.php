<?php
session_start();

unset($_SESSION['email']);
unset($_SESSION['nivel']);
unset($_SESSION['usuario']);

header('location: ../login.php');;

?>