<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Listagem dos processos</title>
  </head>
  <body>
<div class="container" style="margin-top:40px" >
<h4 > Listagem dos processos </h4>
<br>
<table class="table" >
  <thead>
    <tr>
        <th scope="col">Nª do Processo</th>
        <th scope="col">Ano</th>
        <th scope="col">Consumidor</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">Câmara</th>
        <th scope="col">Data </th>
        <th scope="col">Valor </th>
        <th scope="col">Relator </th>

    </tr>
  </thead>

 
        
        <?php
              include 'conexao.php';
              $sql= "SELECT * FROM processo";
              $busca= mysqli_query($conexao,$sql);

              while($array = mysqli_fetch_array($busca)) {

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
<tr>
            <td><?php echo $nrofa ?></td>
            <td><?php echo $ano ?></td>
            <td><?php echo $consumidor ?></td>
            <td><?php echo $fornecedor ?></td>
            <td><?php echo $data ?></td>
            <td><?php echo $camara ?></td>
            <td><?php echo $relator ?></td>
            <td><?php echo $valor ?></td>
          
 </tr>         
            
          <?php } ?>  


        
        
        
    
      
  
</table>
</div>












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>