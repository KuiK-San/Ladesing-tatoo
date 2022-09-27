<?php

$id_user = $_GET['id'];

include('../conect/conexao.php');

$query = "SELECT * FROM `usuarios`";

$sql = mysqli_query($conexao, $query);

$row = mysqli_fetch_assoc($sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../../modelos/imports.html');
    ?>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="./altera_true.php?id=<?= $id_user?>" method="post">
            <div class="input-field col s10 offset-l1">
                <input id="nome" name="nome" max-length="100" value="<?= $row['nome'] ?>" type="text" class="validate black-text">
                <label for="nome" class="">Nome Completo</label>
            </div>
            <div class="input-field col s10 offset-l1">
                <input id="email" type="email" name="email" value="<?= $row['email'] ?>" max-length="200"  class="validate black-text">
                <label for="email" class="">E-mail</label>
            </div>
            <div class="input-field col s10 offset-l1">
                <input id="fone" name="fone" max-length="50" value="<?= $row['telefone'] ?>" type="text" class="validate black-text">
                <label for="fone" class="">Telefone</label>
            </div>
            <div class="input-field col s10 offset-l1">
                <input id="cpf" name="cpf" max-length="50" value="<?= $row['cpf'] ?>" type="text" class="validate black-text">
                <label for="cpf" class="">Cpf</label>
            </div>
            <div class="input-field col s12">
                <select name="nivel" class="">
                    <option <?php if($row['nivel'] == 1){
                        echo('selected');}?> value="1">Usuario</option>
                    <option <?php if($row['nivel'] == 2){
                        echo('selected');}?> value="2">Tatuador</option>
                    <option <?php if($row['nivel'] == 3){
                        echo('selected');}?> value="3">Administrador</option>
                </select>
            </div>
            <p class="   col s12 sem-margin"><a href="../index.php">Voltar</a></p>
            <button type="submit" class="col s10 offset-l1 btn waves-effect waves-light botao">Alterar conta</button>

        <script>
            M.AutoInit();
        </script>
        </form>
    </div>
</body>
</html>