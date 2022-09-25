<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['fone'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];

    include('../conect/conexao.php');

    $query = "INSERT INTO"
?>