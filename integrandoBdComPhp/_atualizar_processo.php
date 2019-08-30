<?php 

include 'conexao.php';

$id = $_POST['id'];
$nrofa = $_POST['nrofa'];
$ano = $_POST['ano'];
$consumidor = $_POST['consumidor'];
$fornecedor = $_POST['fornecedor'];
$relator = $_POST['relator'];
$data = $_POST['data'];
$camara = $_POST['camara'];
$valor = $_POST['valor'];


 echo $sql = "UPDATE processo SET `nrofa`=$nrofa,`ano`=$ano,`consumidor`='$consumidor',`fornecedor`='$fornecedor',`data`='$data',`camara`='$camara',`relator`='$relator',`valor`=$valor WHERE id_processo =$id";


$atualizar = mysqli_query($conexao, $sql);






?>

<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <div class="container" style="width:400px">
    <center>
<h3>Atualizado com sucesso</h3>
<div style="margin-top: 10px">
<a href="listagem.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</center>
</div>