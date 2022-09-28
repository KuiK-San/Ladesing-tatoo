<?php
$id = $_GET['id'];

include('../conect/conexao.php');

$query = "DELETE FROM `usuarios` WHERE `id_user` = $id";

$sql = mysqli_query($conexao, $query);

header('location: ../index.php');
?>