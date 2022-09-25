<?php

session_start();

if (isset($_SESSION['usuario']) == false) {
    unset($_SESSION['usuario']);

    header('location: ./login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Deu certo</h1>
    <a href="acao/logout.php">sair</a>
</body>
</html>