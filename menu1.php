<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Cadastro de Processos</title>
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- aquivo criado css-->
    <link rel="stylesheet" href="css/style.css">
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

<div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!--bg-primary-->
                <a class="navbar-brand" href="#">Sistema de Cadastro de Processos</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse" id="navbarSite">
               

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="adicionar_processo.php" >Adicionar Processos</a>
                        </li>


                        <li class="nav-item">
                             <a class="nav-link" href="listagem.php">Lista de Processos</a>
                        </li>

                        <li class="nav-item">
                             <a class="nav-link" href="aprovar_usuario.php">Aprovar usuários</a>
                        </li>

                        

                         <li class="nav-item">
                                <a class="nav-link" href="cadastro-usuario.php">Cadastrar Usuários</a>
                        </li>

                        <li class="nav-item">
                                <a class="nav-link" href="index.php">Sair</a>
                        </li>

                    

        
                    </ul>
                </div>

            </nav>

        <div id="carouselSite" class="carousel slide my-4" data-ride="carousel" >

            <div class="carousel-inner" id="galeria">

                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="img/Gestao-de-Processos-2.jpg" alt="Primeiro slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Primeiro Slide</h4>
                        <p>Conteúdo do primeiro slide</p>
                    </div>
                </div>
                <div class="carousel-item ">
                        <img class="d-block img-fluid" src="img/tarefasfeitas_sososlteiros-1000x523.jpg" alt="Segundo slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Segundo Slide</h4>
                            <p>Conteúdo do segundo slide</p>
                        </div>
                </div>
                <div class="carousel-item ">
                        <img class="d-block img-fluid" src="img/controle-de-processos-1000x423.jpg" alt="Terceiro slide">
                        <div class="carousel-caption">
                            <h4>Terceiro Slide</h4>
                            <p>Conteúdo do terceiro slide</p>
                        </div>
                        <a class="left carousel-control"
            href="#galeria" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span></a>
                </div>
                
            </div>
           
        </div>
        <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="font-weight: bold;">Processos do primeiro quadrimestre</h5>
        <p class="card-text">Confira aqui a listagem dos processos que deram entrada dos meses de Janeiro à Abril.</p>
        <a href="#" class="btn btn-dark">Acessar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="font-weight: bold;">Processos do segundo quadrimestre</h5>
        <p class="card-text">Confira aqui a listagem dos processos que deram entrada dos meses de Janeiro à Abril.</p>
        <a href="#" class="btn btn-dark">Acessar</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="font-weight: bold;">Processos do terceiro quadrimestre</h5>
        <p class="card-text">Confira aqui a listagem dos processos que deram entrada dos meses de Janeiro à Abril..</p>
        <a href="#" class="btn btn-dark">Acessar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total geral de valores. </h5>
        <p class="card-text">Confira aqui a listagem geral dos processos.</p>
        <p class="card-text"></p>
        <a href="#" class="btn btn-danger">Acessar</a>
      </div>
    </div>
  </div>
</div>



<script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>