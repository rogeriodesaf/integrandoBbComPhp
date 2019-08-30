<?php

include 'conexao.php';


$id= $_GET['id'];
 $sql= "DELETE FROM processo WHERE id_processo = $id";
 $deletar = mysqli_query($conexao, $sql)
  












?>

<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <div class="container" style="width:400px">
    <center>
<h3>Excluido com sucesso</h3>
<div style="margin-top: 10px">
<a href="listagem.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</center>
</div>