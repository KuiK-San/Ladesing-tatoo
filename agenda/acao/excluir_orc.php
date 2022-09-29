<?php
$id = $_GET['id'];

include('../conect/conexao.php');

$query = "SELECT `path` FROM `orcamentos` WHERE `id_orc` = '$id'";

$sql = mysqli_query($conexao, $query);

$path = mysqli_fetch_array($sql);

$path = '../' . $path[0];

if ($path != '../../img/orc/default.png') {
    unlink($path);
}

$query = "DELETE FROM `orcamentos` WHERE `id_orc` = $id";

$sql = mysqli_query($conexao, $query);

header('location: ../index.php');
?>