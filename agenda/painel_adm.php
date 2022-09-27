<?php
    include('./acao/verificador.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../modelos/imports.html');
    ?>
    <title>ADMINISTRADOR</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="navbar-fixed">
        <nav class="black">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <div class="container nav-wrapper ">
                <a href="#" class="brand-logo hide-on-small-only"><img src="../img/logo.png" alt="Logo"></a>

                <a href="#" class="brand-logo show-on-small hide-on-med-and-up"><img src="../img/ladesign_header.png" alt="Logo"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="?file=orcamentos&dir=tabela">Orçamentos</a></li>
                    <li><a href="?file=agendamento&dir=tabela">Agendamentos</a></li>
                    <li><a href="?file=user&dir=tabela">Usuarios</a></li>
                    <li><a href="acao/logout.php">Sair</a></li>
                </ul>
            </div>
            
        </nav>
    </div>
    <ul class="sidenav black" id="mobile-demo">
        <li><a href="?file=orcamentos&dir=tabela" class="waves-effect waves-light white-text">Orçamentos</a></li>
        <li><a href="?file=agendamento&dir=tabela" class="waves-effect waves-light white-text">Agendamentos</a></li>
        <li><a href="?file=user&dir=tabela" class="waves-effect waves-light white-text">Usuarios</a></li>
        <li><a href="acao/logout.php" class="waves-effect waves-light white-text">Sair <i class="material-icons white-text">exit_to_app</i></a></li>
    </ul>

    <?php
        require('./' . $_GET['dir'] . '/' . $_GET['file'] . '.php');
    ?>

    <script>
        M.AutoInit();
    </script>
</body>
</body>
</html>