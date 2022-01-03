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
       #div1 { background-color: #87CEFA; }
        
    </style>

    <title></title>

</head>
<body>
    <div  class="container text-center">
        <h3> Aulas PHP iniciante </h3>
    <div>

    </div>

    <div class="container">
        <div class="list-group">
        <a class="list-group-item list-group-item-action active">
            Lista de arquivos 'Aulas.php'
        </a>

       
        <?php 

            // Lista os diretórios da pasta aulas_php, e cria uma lista com um link pra cadaitem listado. 
    
            $path = "../aulas_php/";
            $path2 = "../aulas_php/SQL_CRUD";
            $diretorio = dir($path);
            $diretorio2 = dir($path2);
            $noadd = ".";           // Exclui da lista todos os arquivos que começam com '.' (ponto).
            $scandir = scandir($path);
            
            while($arquivo = $diretorio -> read() or $arquivo = $diretorio2 -> read()){
                if(strpos($arquivo, $noadd)){
                echo "<a href='{$arquivo}' class='list-group-item list-group-item-action'> $arquivo </a>";
                }
            }

            $diretorio -> close();
        
        ?>

    </div>


    
</body>
</html>