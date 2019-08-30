<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Cadastro de Usuários</title>
  </head>
  <body>


<div class="container" id="menu">
<div style="text-align: right">
<a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
</div>
<h4>Cadastro de Usuário</h4>

<form action="_insert_usuario_externo.php" method="post">
<div class="form-group">
    <label>Nome do Usuário</label>
    <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
</div>
<div class="form-group">
    <label>E-mail</label>
    <input type="email" name="emailusuario" class="form-control" required autocomplete="off" placeholder="Insira seu e-mail">
</div>
<div class="form-group">
    <label>Senha</label>
    <input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Insira Senha">
</div>
<div class="form-group">
    <label>Confirme a Senha</label>
    <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Confirme a senha" oninput="validaSenha(this)">
    <small>Precisa ser igual a senha digitada a cima.</small>
</div>

                                                
  
</div>
<div style="text-align:right">

</div>
<center>
<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
</center>

</form>



</div>














  <script src="js/jquery-3.3.1.slim.min.js" ></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.js"></script>

<script>
function validaSenha (input){
  if (input.value != document.getElementById('txtSenha').value){
    input.setCustomValidity('Repita a senha corretamente');
    } else{
      input.setCustomValidity('');
    }
}

</script>
        </body>
      </html>   
