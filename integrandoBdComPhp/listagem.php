<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Listagem de Processos</title>
  </head>
  <body>

<div class="container" style="margin-top:80px">
<h3>Lista de Processos</h3>
<br>

<table class="table">
<thead class="thead-dark">
  
    <tr>
      <th scope="col">nrofa</th>
      <th scope="col">ano</th>
      <th scope="col">consumidor</th>
      <th scope="col">fornecedor</th>
      <th scope="col">data</th>
      <th scope="col">camara</th>
      <th scope="col">relator</th> 
      <th scope="col">valor</th> 
      <th scope="col">Ação</th> 
    </tr>
  </thead>
  <tbody>
      <tr>


       <?php

              include 'conexao.php';
              $sql = "SELECT * FROM processo";
              $busca = mysqli_query($conexao, $sql);

              while ($array = mysqli_fetch_array($busca)) {

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
                  <td><a class ="btn btn-warning btn-sm" style="color:#fff" href="editar_processo.php?id=<?php echo $id_processo ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                  <a class ="btn btn-DANGER btn-sm" style="color:#fff" href="editar_processo.php?id=<?php echo $id_processo ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>
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




        



