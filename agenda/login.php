<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../modelos/imports.html') ?>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/scroll.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    
    <title>Login!</title>
</head>
<body>

    <div class="cadastro">
        <div class="container">
            <div class="row">
                <div class="col l6 offset-l6 formulario">
                    <h4 class="center-align grey-text">
                        Crie sua conta!
                    </h4>
                    <?php
                    session_start();
                    if(isset($_SESSION['erro_senha'])){
                        ?>
                        <p class="red-text center-align">Senha ou usuario incorretos</p>
                        <?php
                        unset($_SESSION['erro_senha']);
                    }
                    ?>
                    <form action="acao/login.php" method="post">
                        <div class="input-field col s10 offset-l1">
                            <input id="email" type="email" name="email" max-length="200"  class="validate black-text">
                            <label for="email" class="">E-mail</label>
                        </div>
                        <div class="input-field col s10 offset-l1">
                            <input id="senha" name="senha" max-length="200" type="password" class="validate black-text">
                            <label for="senha" class="">Digite uma senha</label>
                        </div>
                        <p class="center-align col s12 sem-margin">Não tem uma conta? <a href="cadastro.php">Criar.</a> <a href="../index.php">Voltar</a></p>
                        <button type="submit" class="col s10 offset-l1 btn waves-effect waves-light botao">Criar conta</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="../js/mask.js"></script>
    <script>
        M.AutoInit()
    </script>
</body>
</html>