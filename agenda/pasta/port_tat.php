<?php
    include('./acao/verificador.php');
    if ($_SESSION['nivel'] != 2) {
        header('location: index.php');
    }
    include('./conect/conexao.php');
?>
<div class="container">
    <h3 class="col l12 center-align">
        Imagens da página de portfólio
    </h3>
    
        <form method="POST" enctype="multipart/form-data" action="cadimg.php">
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="arquivo">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" >Enviar </button>
        </form>
    <h3 class="col l12 center-align">
        Imagens publicadas
    </h3>
    <table class="striped responsive-table">
        <thead>
            <th>Imagem</th>
            <th>Nome do tatuador</th>
            <th>Data de publicação</th>
        </thead>
        <tbody>
            <?php
                
                $query = "SELECT * FROM `port`";
                $sql = mysqli_query($conexao, $query);
                
                while ($row = mysqli_fetch_assoc($sql)) {
                    $row_id = $row['id_user'];
                    $query_user = "SELECT * FROM `usuarios` WHERE `id_user` = '$row_id'";
                    $sql_user = mysqli_query($conexao, $query_user);
                    $row_user = mysqli_fetch_assoc($sql_user);
                ?>
                <tr>
                    <td><img src="../<?=$row['path']?>" class="responsive-img" alt=""> </td>
                    <td><?= $row_user['nome'] ?></td>
                    <td><?= $row['data_up'] ?></td>
                </tr>
           <?php }

            
            ?>
        </tbody>
    </table>
</div>
