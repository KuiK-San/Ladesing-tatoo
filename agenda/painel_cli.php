<?php
include('./acao/verificador.php');
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
    <title>Area do cliente</title>
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
                    <li><a href="?file=fazer_orcamento&dir=pasta">Fazer um orçamento</a></li>
                    <li><a href="acao/logout.php">Sair</a></li>
                </ul>
            </div>
            
        </nav>
    </div>
    <ul class="sidenav black" id="mobile-demo">
        <li><a href="?file=fazer_orcamento&dir=pasta" class="waves-effect waves-light white-text">Fazer um orçamento</a></li>
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