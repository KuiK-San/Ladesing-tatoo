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
    
    <title>Fazer cadastro!</title>
</head>
<body>

    <div class="cadastro">
        <div class="container">
            <div class="row">
                <div class="col l6 offset-l6 formulario">
                    <h4 class="center-align grey-text">
                        Crie sua conta!
                    </h4>
                    <form action="cadastros/cad_user.php" method="post">
                        <div class="input-field col s10 offset-l1">
                            <input id="nome" name="nome" max-length="100" type="text" class="validate black-text">
                            <label for="nome" class="">Nome Completo</label>
                        </div>
                        <div class="input-field col s10 offset-l1">
                            <input id="email" type="email" max-length="200"  class="validate black-text">
                            <label for="email" class="">E-mail</label>
                        </div>
                        <div class="input-field col s10 offset-l1">
                            <input id="senha" name="senha" max-length="200" type="password" class="validate black-text">
                            <label for="senha" class="">Digite uma senha</label>
                        </div>
                        <div class="input-field col s10 offset-l1">
                            <input id="fone" name="fone" max-length="50" type="text" class="validate black-text">
                            <label for="fone" class="">Telefone</label>
                        </div>
                        <div class="input-field col s10 offset-l1">
                            <input id="cpf" name="cpf" max-length="50" type="text" class="validate black-text">
                            <label for="cpf" class="">Cpf</label>
                        </div>
                        <div class="input-field col s10 offset-l1">
                            <input id="data" name="data" max-length="100" type="text" class="validate black-text">
                            <label for="data" class="">Data de nascimento</label>
                        </div>
                        <p class="center-align col s12 sem-margin">Já tem uma conta? <a href="">Entrar.</a> <a href="../index.php">Voltar</a></p>
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