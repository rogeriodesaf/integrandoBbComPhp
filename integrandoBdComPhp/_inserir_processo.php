<?php
  
include 'conexao.php';

$nrofa = $_POST['nrofa'];
$ano = $_POST['ano'];
$consumidor = $_POST['consumidor'];
$fornecedor = $_POST['fornecedor'];
$relator = $_POST['relator'];
$data = $_POST['data'];
$camara = $_POST['camara'];
$valor = $_POST['valor'];



$sql = "INSERT INTO `processo`( `nrofa`, `ano`, `consumidor`, `fornecedor`, `data`, `camara`, `relator`, `valor`) VALUES ($nrofa,$ano,'$consumidor','$fornecedor','$data','$camara','$relator',$valor)";

$inserir = mysqli_query($conexao, $sql);
   
?>

<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


    <div class="container" style="margin-top:200px">

      <h4 style="text-align:center">Processo adicionado com sucesso.</h4>
      <div style="padding-top: 100px">
      <div id="botao1">
      <a href="index.php" role="button" class="btn btn-sm btn-primary">Inserir novo cadastro.</a>
      
</div>
      </div>
    </div>