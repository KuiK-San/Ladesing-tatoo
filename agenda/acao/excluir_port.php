<?php
$id = $_GET['id'];

include('../conect/conexao.php');


$query = "SELECT `path` FROM `port` WHERE `id_port` = '$id'";

$sql = mysqli_query($conexao, $query);

$path = mysqli_fetch_array($sql);

$path = '../' . '../' . $path[0];

unlink($path);

$query = "DELETE FROM `port` WHERE `id_port` = $id";

$sql = mysqli_query($conexao, $query);

header('location: ../index.php');
?>