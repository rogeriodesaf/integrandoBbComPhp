<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<style type="text/css">
        #tamanho{
              width:500000px;
}
</style>

    <title>Menu</title>
  </head>
  <body>
  <?php 

  session_start();
  $usuario =$_SESSION['usuario'];

  if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
  }
include 'conexao.php';

$sql = "SELECT nivel_usuario FROM usuarios WHERE email_usuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivel_usuario'];
?>

  <div class="container" id="tamanho" style="margin-top:200px">

  <div class="row">
  <?php
  if(($nivel == 1) ||($nivel ==2)){

  ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Processos</h5>
        <p class="card-text">Adicione aqui um novo processo.</p>
        <a href="adicionar_processo.php" class="btn btn-primary">Cadastrar produto</a>
      </div>
    </div>
  </div>

  <?php } ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Processos</h5>
        <p class="card-text">Visualize aqui a lista de processos.</p>
        <a href="listagem.php" class="btn btn-primary">Lista de Processos.</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar usuários</h5>
        <p class="card-text">Aprovar usuários cadastrados  </p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar usuários</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Usuários</h5>
        <p class="card-text">Cadastrar usuários  </p>
        <a href="cadastro-usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
      </div>
    </div>
  </div>
</div>






  </div>


















  <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>