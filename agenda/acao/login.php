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
        $_SESSION['nivel'] = $row['nivel'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['telefone'] = $row['telefone'];

        switch ($row['nivel']) {
            case '2':
                header('location: ../painel_fun.php?file=orcamentos_tat&dir=pasta');
                $_SESSION['msg_class'] = "green white-text";
                $_SESSION['mensagem'] = "Olá " .  $row['nome'] . ". Sejá bem vindo ao painel de tatuador";
                break;
            
            case '3':
                header('location: ../painel_adm.php?file=orcamentos&dir=pasta');
                $_SESSION['msg_class'] = "green white-text";
                $_SESSION['mensagem'] = "Olá " .  $row['nome'] . ". Sejá bem vindo ao painel de administrador";
                break;
            
            default:
                header('location: ../index.php');
                $_SESSION['msg_class'] = "green white-text";
                $_SESSION['mensagem'] = "Olá " .  $row['nome'] . ". Sejá bem vindo ao painel de clientes";
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