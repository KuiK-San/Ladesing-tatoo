<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../modelos/imports.html');
    ?>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
<!--     <meta http-equiv="refresh" content="3"> -->
    <title>Portfólio - Ladesign</title>
</head>
<body>
    <div class="navbar-fixed">
        <nav class="z-depth-0 ">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <div class="container nav-wrapper ">
                <a href="../index.php" class="brand-logo hide-on-small-only"><img src="../img/logo.png" alt="Logo"></a>

                <a href="../index.php" class="brand-logo show-on-small hide-on-med-and-up"><img src="../img/ladesign_header.png" alt="Logo"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../agenda/portfolio.php">Portfólio</a></li>
                <li><a href="../sobre.php">Sobre</a></li>
                <li><a href="../agenda/">Agenda</a></li>
                </ul>
            </div>
            
        </nav>
    </div>
    <ul class="sidenav black" id="mobile-demo">
        <li><a href="../index.php" class="waves-effect waves-light white-text">Home</a></li>
        <li><a href="../agenda/portfolio.php" class="waves-effect waves-light white-text">Portfólio</a></li>
        <li><a href="../sobre.php" class="waves-effect waves-light white-text">Sobre</a></li>
        <li><a href="../agenda/" class="waves-effect waves-light white-text">Agenda</a></li>
    </ul>

    <article class="historia grey darken-3"> 
        <div class="container">
            <div class="row">
                <h3 class="col l12 white-text center-align">
                    Alguns dos nossos trabalhos
                </h3>
            </div>
            <div class="row">
                <?php
                include('./conect/conexao.php');
                
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
    include('../modelos/footer.html');
    ?>
    <script>
        M.AutoInit();
    </script>
</body>
</html>