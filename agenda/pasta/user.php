<div class="container valign-wrapper">
    <table class="striped responsive-table">
        <thead>
            <th>Email</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Data De Nascimento</th>
            <th>Cargo</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php
            
            include('./conect/conexao.php');

            $query = "SELECT * FROM `usuarios`";
            $sql = mysqli_query($conexao, $query);

            while ($row = mysqli_fetch_assoc($sql)) {?>
                <tr>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['nome'] ?></td>
                    <td><?= $row['telefone'] ?></td>
                    <td><?= $row['data_nas'] ?></td>
                    <td><?php switch ($row['nivel']) {
                        case '2':
                            echo('Tatuador');
                            break;
                        
                        case '3':
                            echo('Administrador');
                            break;
                        
                        default:
                            echo('Usuario Padrão');
                            break;
                    }?></td>
                    <td>
                        <a href="./acao/excluir.php?id=<?=$row['id_user']?>&tabela=usuarios&volta=painel_adm.php&id_name=id_user"><i class="material-icons">delete</i></a>
                        <a href="./acao/altera_user.php?id=<?=$row['id_user']?>"><i class="material-icons">autorenew</i></a>


                    </td>
                </tr>
           <?php }

            
            ?>
        </tbody>
    </table>
</div>