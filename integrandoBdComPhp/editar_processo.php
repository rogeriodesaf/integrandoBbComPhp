<?php

include 'conexao.php';

 $id = $_GET['id'];

 



?>
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
<div class="container" id=container1>
  <h4>Controle de Processos das Câmaras</h4>
  <form action="_atualizar_processo.php" method="post">
<?php

    $sql =  "SELECT * FROM processo WHERE id_processo =$id";
    $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($buscar)){


            $id_processo =$array['id_processo'];
            $nrofa=$array['nrofa'];
            $ano =$array['ano'];
            $consumidor =$array['consumidor'];
            $fornecedor =$array['fornecedor'];
            $data =$array['data'];
            $camara =$array['camara'];
            $relator =$array['relator'];
            $valor =$array['valor'];


?>



      <div class="form-group">
        <label>Nro FA</label>
        <input type="number" class="form-control" name="nrofa" value= "<?php echo $nrofa ?>" >
        <input type="number" class="form-control" name="id" value="<?php echo $id ?>"style="display: none" >
      </div>

         <div class="form-group">
        <label>Ano</label>
        <input type="number" class="form-control" name="ano" value="<?php echo $ano ?>">
        </div>

        <div class="form-group">
        <label>Consumidor</label>
        <input type="text" class="form-control" name="consumidor" value="<?php echo $consumidor ?>">
        </div>

        <div class="form-group">
        <label>Fornecedor</label>
        <input type="text" class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
        </div>

        <div class="form-group">
        <label>Valor</label>
        <input type="number" class="form-control" name="valor" value="<?php echo $valor ?>">

        <label>Relatores</label>
        <select class="form-control" name="relator" >
            <option >Advogado 1</option>
            <option>Advogado 2</option>
            <option>Advogado 3</option>
            <option>Advogado 4</option>
            <option>Advogado 5</option>
            <option>Advogado 6</option>
        </select>
        <label>Câmara</label>
        <select class="form-control" name="camara" >
            <option >1 sessão </option>
            <option> 2 sessão </option>
        </select>
        <label>Data</label>
        <input  type="date" class="form-control" name="data"value="<?php echo $data ?>">
      </div>
     <div id="botao">
       <button type="submit"   class="btn btn-primary" >Atualizar</button>
      </div>
      <?php } ?>
  </form>
        
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>