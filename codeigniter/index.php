<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    #div1 {
      background-color: #87CEFA;
    }
  </style>

  <title></title>

</head>

<body>
  <div class="container text-center">
    <h3> Aulas PHP iniciantes </h3>
    <div>

    </div>

    <div class="container">


      <div class="list-group">
        <a class="list-group-item list-group-item-action active">
          Lista de Projetos
        </a>

        <?php

        // Lista os diretórios da pasta aulas_php, e cria uma lista com um link pra cadaitem listado. 

        $path1 = "../codeigniter/projeto1/";
        $diretorio1 = dir($path1);
        $noadd = ".";           // Exclui da lista todos os arquivos que começam com '.' (ponto).
        $scandir = scandir($path1);

        while ($arquivo1 = $diretorio1->read()) {
          if (strpos($arquivo1, $noadd)) {
            $way = "$path1$arquivo1";
            echo "<a href='{$way}' class='list-group-item list-group-item-action'> $arquivo1 </a>";
          }
        }

        $diretorio1->close();

        ?>


      </div>



</body>

</html>
