<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('modelos/imports.html');
    ?>
<!--     <meta http-equiv="refresh" content="3"> -->
    <title>Portfólio - Ladesign</title>
</head>
<body>
    <?php
        include('modelos/navbar.html');
    ?>

    <article class="historia grey darken-3"> 
        <div class="container">
            <div class="row">
                <h3 class="col l12 white-text center-align">
                    Alguns dos nossos trabalhos
                </h3>
            </div>
            <div class="row">
                <?php
                include('./agenda/conect/conexao.php');
                
                $query = "SELECT * FROM `port`";
                $sql = mysqli_query($conexao, $query);
                
                while ($row = mysqli_fetch_assoc($sql)) {
                    $row_id = $row['id_user'];
                    $query_user = "SELECT * FROM `usuarios` WHERE `id_user` = '$row_id'";
                    $sql_user = mysqli_query($conexao, $query_user);
                    $row_user = mysqli_fetch_assoc($sql_user);?>
                    <div class="port-section col l4 m6 s12">
                        <div class="port-imagem center-align">
                            <img class="responsive-img" src="<?=$row['path']?>" alt="">
                        </div>
                        <p class="center-align white-text flow-text">Tatuagem feita por: <br> <?= $row_user['nome'] ?></p>
                    </div>
                <?php
                    
                }
                ?>
            </div>
        </div>
    </article>

    <?php
    include('modelos/footer.html');
    ?>
    <script>
        M.AutoInit();
    </script>
</body>
</html>