<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Formulário de Cadastro</title>
  </head>
  <body>
<div class="container">
  <h4>Controle de Processos das Câmaras</h4>
  <form action="_inserir_processo.php" method="post">
      <div class="form-group">
        <label>Nro FA</label>
        <input type="number" class="form-control" name="nrofa" placeholder="Insira o número da FA" required>
        
        <label>Ano</label>
        <input type="number" class="form-control" name="ano" placeholder="Insira o ano.">

        <label>Consumidor</label>
        <input type="text" class="form-control" name="consumidor" placeholder="Insira nome do consumidor.">

        <label>Fornecedor</label>
        <input type="text" class="form-control" name="fornecedor" placeholder="Insira nome do consumidor.">

        <label>Valor</label>
        <input type="number" class="form-control" name="valor" placeholder="Insira nome do consumidor.">

        <label>Relatores</label>
        <select class="form-control" name="relator">
            <option >Advogado 1</option>
            <option>Advogado 2</option>
            <option>Advogado 3</option>
            <option>Advogado 4</option>
            <option>Advogado 5</option>
            <option>Advogado 6</option>
        </select>
        <label>Câmara</label>
        <select class="form-control" name="camara">
            <option >1 sessão </option>
            <option> 2 sessão </option>
        </select>
        <label>Data</label>
        <input  type="date" class="form-control" name="data" placeholder="Data do julgamento." > 
      </div>
     <div id="botao">
       <button type="submit"   class="btn btn-primary">Cadastrar</button>
      </div>
  </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>