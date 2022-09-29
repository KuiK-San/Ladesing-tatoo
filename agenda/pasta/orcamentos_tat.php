<?php
    include('./acao/verificador.php');
    if ($_SESSION['nivel'] != 2) {
        header('location: index.php');
    }
?>
<div class="container">
    <h3 class="col l12 center-align">
        Orçamentos
    </h3>
    <table class="striped responsive-table">
        <thead>
            <th>Refencia</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Mensagem</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php
            
            include('./conect/conexao.php');

            $query = "SELECT * FROM `orcamentos`";
            $sql = mysqli_query($conexao, $query);

            while ($row = mysqli_fetch_assoc($sql)) {
                    $telefone = explode(' ', $row['telefone']);
                    $ddd = $telefone[0];
                    $numero = $telefone[1];
                    $ddd = explode('(', $ddd);
                    $ddd = $ddd[1];
                    $ddd = explode(')', $ddd);
                    $ddd = $ddd[0];

                    $numero = explode('-', $numero);
                    $numero = $numero[0] . $numero[1];
                    $telefone = $ddd . $numero;

                ?>
                <tr>
                    <td><img src="<?=$row['path']?>" class="responsive-img" alt=""> </td>
                    <td><?= $row['nome_cli'] ?></td>
                    <td><?= $row['telefone'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['mensagem'] ?></td>
                    <td>
                        <a href="mailto:<?=$row['email'] ?>"><i class="material-icons">contact_mail</i></a>
                        <a href="tel:+55<?=$telefone?>"><i class="material-icons">contact_phone</i></a>
                    </td>
                </tr>
           <?php }

            
            ?>
        </tbody>
    </table>
</div>