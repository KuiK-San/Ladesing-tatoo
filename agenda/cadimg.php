<?php
include('./acao/verificador.php');
include('./conect/conexao.php');

$email = $_SESSION['email'];

$query_user = "SELECT * FROM `usuarios` WHERE `email` = '$email'";
$sql_user = mysqli_query($conexao, $query_user);

$row_user = mysqli_fetch_assoc($sql_user);

$id_user = $row_user['id_user'];


$arquivo = $_FILES['arquivo'];
if ($arquivo['error']){
    die ("falha ao enviar o arquivo");
}
if ($arquivo['size']>5097152){
    die("arquivo muito grande!! Max:5Mb");
/* var_dump($_FILES['arquivo']); */
}
$pasta = "img/port/";
$nomeDoArquivo = $arquivo['name'];
$novoNomedoArquivo = uniqid();
$extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION)); 

if ($extensao != "jpg" && $extensao != 'png'){
    die ("Tipo de arquivo não aceito");
}
$path = $pasta.$novoNomedoArquivo. ".".$extensao;
$deu_certo = move_uploaded_file($arquivo["tmp_name"], "../" . $path);
if($deu_certo){
    $query = "INSERT INTO `port`(`path`,`data_up`, `id_user`) VALUES ('$path', NOW(),'$id_user')";
    $sql = mysqli_query($conexao, $query);
    echo"<p>arquivo enviado com sucesso!</p>";
}else{
    echo "<P> falha ao enviar o arquivo</p>";  
}
        
    
header('location: ./index.php');

?>