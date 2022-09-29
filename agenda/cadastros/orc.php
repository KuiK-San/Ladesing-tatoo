<?php
session_start();
include('../conect/conexao.php');
$arquivo=$_FILES['arquivo'];

/* var_dump($_FILES['arquivo']); */

if(!empty($arquivo['size']) ){
    
    if ($arquivo['error']){
        die ("falha ao enviar o arquivo");
    }
    if ($arquivo['size']>5097152){
        die("arquivo muito grande!! Max:5Mb");
    }
    $pasta = "../img/orc/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomedoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION)); 

    if ($extensao != "jpg" && $extensao != 'png'){
        die ("Tipo de arquivo não aceito");
    }
    $path = $pasta.$novoNomedoArquivo. ".".$extensao;
    $deu_certo = move_uploaded_file($arquivo["tmp_name"], "../" . $path);
    if($deu_certo){
        $nome = $_SESSION['usuario'];
        $telefone = $_SESSION['telefone'];
        $email = $_SESSION['email'];
        $mensagem = $_POST['mensagem'];

        $query = "INSERT INTO `orcamentos`(`nome_cli`, `telefone`, `email`, `path`, `mensagem`) VALUES ('$nome','$telefone','$email','$path','$mensagem')";

        $sql = mysqli_query($conexao, $query); 
        
        echo"";
    }else{
        echo "";   
    }
}else{
    $nome = $_SESSION['usuario'];
    $telefone = $_SESSION['telefone'];
    $email = $_SESSION['email'];
    $mensagem = $_POST['mensagem'];

    $query = "INSERT INTO `orcamentos`(`nome_cli`, `telefone`, `email`, `mensagem`) VALUES ('$nome','$telefone','$email','$mensagem')";

    $sql = mysqli_query($conexao, $query);
}



header('location: ../painel_cli.php?file=fazer_orcamento&dir=pasta');
?>