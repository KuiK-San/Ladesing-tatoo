<?php

session_start();

if(!empty($_POST['email']) && !empty($_POST['senha'])){
    $user_email = $_POST['email'];
    $user_senha = $_POST['senha'];

    include('../conect/conexao.php');

    $query = "SELECT * FROM `usuarios` WHERE `email` = '$user_email'";

    $sql = mysqli_query($conexao, $query);

    $row = mysqli_fetch_assoc($sql);

    if(password_verify($user_senha, $row['senha'])){
        $_SESSION['usuario'] = $row['nome'];

        switch ($row['nivel']) {
            case '2':
                header('location: ../painel_fun.php');
                break;
            
            case '3':
                header('location: ../painel_adm.php?file=agendamento&dir=tabela');
                break;
            
            default:
                header('location: ../index.php');
                break;
        }
    }else{
        $_SESSION['erro_senha'] = TRUE;
        header('location: ../login.php');
    }

}else{
    header('location: ../login.php');
}

?>