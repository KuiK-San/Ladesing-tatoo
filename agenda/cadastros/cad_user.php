<?php

    session_start();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $telefone = $_POST['fone'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];
    $data_array = explode('/', $data);
    $ano_nas = intval($data_array[2]);
    
    include('../conect/conexao.php');

    if($ano_nas - date('Y') >= 18){

        $query = "INSERT INTO `usuarios`(`email`, `nome`, `senha`, `telefone`, `cpf`, `data_nas`) VALUES ('$email','$nome','$senha','$telefone','$cpf','$data')";

        $sql = mysqli_query($conexao, $query); 

        header('location: ../login.php');
    }else{
        $_SESSION['menor'] = TRUE;
        header('location: ../cadastro.php');
    }
?>