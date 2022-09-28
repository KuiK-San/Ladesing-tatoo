<?php
    include('./acao/verificador.php');
    if ($_SESSION['nivel'] != 3) {
        header('location: index.php');
    }
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
                    <li><a href="?file=orcamentos&dir=pasta">Orçamentos</a></li>
                    <li><a href="?file=port&dir=pasta">Portfólio</a></li>
                    <li><a href="?file=agendamento&dir=pasta">Agendamentos</a></li>
                    <li><a href="?file=user&dir=pasta">Usuarios</a></li>
                    <li><a href="acao/logout.php">Sair</a></li>
                </ul>
            </div>
            
        </nav>
    </div>
    <ul class="sidenav black" id="mobile-demo">
        <li><a href="?file=orcamentos&dir=pasta" class="waves-effect waves-light white-text">Orçamentos</a></li>
        <li><a href="?file=agendamento&dir=pasta" class="waves-effect waves-light white-text">Agendamentos</a></li>
        <li><a href="?file=port&dir=pasta" class="waves-effect waves-light white-text">Portfólio</a></li>
        <li><a href="?file=user&dir=pasta" class="waves-effect waves-light white-text">Usuarios</a></li>
        <li><a href="acao/logout.php" class="waves-effect waves-light white-text">Sair <i class="material-icons white-text">exit_to_app</i></a></li>
    </ul>

    <?php
        include('./' . $_GET['dir'] . '/' . $_GET['file'] . '.php');
    ?>

    <script>
        M.AutoInit();
        <?php
        if(isset($_SESSION['mensagem'])){ ?>
            M.toast({html: '<?= $_SESSION['mensagem']?>', classes: '<?= $_SESSION['msg_class']?>'})
            <?php
            unset($_SESSION['mensagem']);
            unset($_SESSION['msg_class']);
            
        }?>
    </script>
</body>
</body>
</html>