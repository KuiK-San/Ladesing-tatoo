<?php

include('./acao/verificador.php');

switch ($_SESSION['nivel']) {
    case '2':
        header('location: painel_fun.php');

        break;
    
    case '3':
        header('location: painel_adm.php?file=agendamento&dir=pasta');
        break;
    
    default:
        header('location: ');
        break;
}

?>
<a href="acao/logout.php">sair</a>
