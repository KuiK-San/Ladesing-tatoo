<?php
$id_user = $_GET['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$cpf = $_POST['cpf'];
$nivel = $_POST['nivel'];

include('../conect/conexao.php');

$query = "UPDATE `usuarios` SET ,`email`='$email',`nome`='$nome',`telefone`='$fone',`cpf`='$cpf',`nivel`='$nivel' WHERE `id_user` = '$id_user'";

$sql = mysqli_query($conexao, $query);


/* header('location: ../painel_adm.php'); */


?>