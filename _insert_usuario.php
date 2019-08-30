<?php

include 'conexao.php';
include 'script/password.php';


$nomeusuario =$_POST['nomeusuario'];
$email = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';


$sql = "INSERT INTO usuarios (nome_usuario,email_usuario, senha_usuario, nivel_usuario,status) values ('$nomeusuario','$email',sha1('$senha'),$nivel,'$status')";
$inserir = mysqli_query($conexao,$sql);



?>

<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <div class="container" style="width:400px">
    <center>
<h3>Usuário adicionado com  sucesso!</h3>
<div style="margin-top: 10px">
<a href="cadastro-usuario.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</center>
</div>