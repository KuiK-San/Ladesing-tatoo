<?php

include('./acao/verificador.php');

switch ($_SESSION['nivel']) {
    case '2':
        header('location: painel_fun.php?file=orcamentos_tat&dir=pasta');
        break;
    
    case '3':
        header('location: painel_adm.php?file=orcamentos&dir=pasta');
        break;
    
    default:
        header('location: painel_cli.php?file=fazer_orcamento&dir=pasta');
        break;
}

?>
<a href="acao/logout.php">sair</a>
