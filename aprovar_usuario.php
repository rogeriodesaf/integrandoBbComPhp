<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Aprovar usuário</title>
  </head>
<body>

  <div class="container">
  <div style="text-align:right">
  <a href="menu1.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
  </div>

<h3 style="font-weight: bold">Lista de Usuários</h3>
<br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome </th>
                <th scope="col">E-mail </th>
                <th scope="col">Nível </th>
                <th scope="col">Ação</th>
            </tr>
        </thead> 


    <?php
    include 'conexao.php';
    $sql = "SELECT * FROM usuarios WHERE status = 'Inativo' ";
    $busca = mysqli_query($conexao, $sql);

    while ($array = mysqli_fetch_array($busca)) {
        $id_usuario = $array['id_usuario'];
        $nomeusuario = $array['nome_usuario'];
        $email = $array['email_usuario'];
        $nivel =$array['nivel_usuario'];
        ?>
    <tr>
        <td><?php echo $nomeusuario  ?></td>
        <td><?php echo $email  ?></td>
        <td><?php echo $nivel  ?></td>




        <td>
          <a class="btn btn-success btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>
        &nivel=1" role="button"><i class="far fa-edit"></i>&nbsp;Administrador</a>

        <a class="btn btn-danger btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>
        &nivel=2" role="button"><i class="far fa-edit"></i>&nbsp;Relator</a>

        <a class="btn btn-warning btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>
        &nivel=3" role="button"><i class="far fa-edit"></i>&nbsp;Conferente</a>

        <a class="btn btn-dark btn-sm" style="color:#fff" href="_deleter_usuario.php?id=<?php echo $id_usuario ?>
        " role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
</td>

</tr> 

    <?php } ?>


</table>












  </div>

  <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
