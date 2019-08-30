<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <TITLE>login</TITLE>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css">
        #tamanho{
            width:350px;
            -webkit-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
-moz-box-shadow:10px 10px 28px -8px rgba(194,194,194,1);
box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
        }
    </style>
</head>
<body>

<div class="container" id="tamanho" style="margin-top: 200px; border-radius: 15px; border: 2px solid #f3f3f3">
<div style="padding: 10px">
    <center>
<img src="img/procon.png" width="200px" height="100px" >
    </center>
<form action="index1.php" method="post">
<div class="form-group"> 
    <label>Usuário</label>
    <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
</div>
<div class="form-group"> 
    <label>Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="Insira a senha.">
</div>


<div style="text-align: right;">
<button type="submit" class="btn btn-sm btn-success">Entrar</button>
</div>
</form>
</div>
</div>



<div style="margin-top: 10px">
<center>
<small><p>Você não possui cadastro? Clique<a href="cadastro-usuario-externo.php"> aqui. </a></p></small>

</center>

</div>







  <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
