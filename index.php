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
        <h3> Aulas PHP iniciantes </h3>
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
            $diretorio = dir($path);
            $noadd = ".";           // Exclui da lista todos os arquivos que começam com '.' (ponto).
            $scandir = scandir($path);
            
            while($arquivo = $diretorio -> read()){
                if(strpos($arquivo, $noadd)){
                echo "<a href='{$arquivo}' class='list-group-item list-group-item-action'> $arquivo </a>";
                }
            }

            $diretorio -> close();
        
        ?>

    
        <hr>
    
        <div class="list-group">
        <a class="list-group-item list-group-item-action active">
            Lista de arquivos 'CRUD PHP'
        </a>

        <?php 

            // Lista os diretórios da pasta aulas_php, e cria uma lista com um link pra cadaitem listado. 
    
            $path2 = "../aulas_php/SQL_CRUD/";
            $diretorio2 = dir($path2);
            $noadd = ".";           // Exclui da lista todos os arquivos que começam com '.' (ponto).
            $scandir = scandir($path);
            
            while($arquivo2 = $diretorio2 -> read()){
                if(strpos($arquivo2, $noadd)){
                $way = "$path2$arquivo2";
                echo "<a href='{$way}' class='list-group-item list-group-item-action'> $arquivo2 </a>";
                }
            }

            $diretorio2 -> close();
        
        ?>

        <hr>
    
        <div class="list-group">
        <a class="list-group-item list-group-item-action active">
            Lista de arquivos 'CodeIgniter'
        </a>

        <?php 

            // Lista os diretórios da pasta aulas_php, e cria uma lista com um link pra cadaitem listado. 
    
            $path3 = "../aulas_php/codeigniter/";
            $diretorio3 = dir($path3);
            $noadd = ".";  // Exclui da lista todos os arquivos que começam com '.' (ponto).
            $scandir = scandir($path);  // Vasculha o diretório .
            
            while($arquivo3 = $diretorio3 -> read()){
                if(strpos($arquivo3, $noadd)){
                $way = "$path3$arquivo3"; // Concatena o caminho com o nome do arquivo para se usado como atalho.
                echo "<a href='{$way}' class='list-group-item list-group-item-action'> $arquivo3 </a>";
                }
            }

            $diretorio3 -> close();
        
        ?>

    </div>

    <!--
    <div  class="container text-center">
        <h3> Aulas PHP iniciante </h3>
    <div>
    
    </div>


    
    <div class="container">
        <div class="list-group">
        <a class="list-group-item list-group-item-action active">
            Lista de arquivos 'Aulas.php'
        </a>
    -->
        
        <?php
        /* 
            // Endereço do wsl que queremos acessar:
            $str = "\\\wsl$\Ubuntu-20.04\home\\rodrigo\codeapache\Projeto 1";

            // Altera a string para receber \\ sem escapar os caracteres.
            function checkaddslashes($str){       
                if(strpos(str_replace("\'",""," $str"),"'")!=false)
                    return addslashes($str);
                else
                    return $str;
            }

            echo $str;

            // Lista os diretórios da pasta aulas_php, e cria uma lista com um link pra cadaitem listado. 
    
            $path = "$str";
            $diretorio = dir($path);
            $noadd = ".";           // Exclui da lista todos os arquivos que começam com '.' (ponto).
            $scandir = scandir($path);
            
            while($arquivo = $diretorio -> read() or $arquivo = $diretorio2 -> read()){
                if(strpos($arquivo, $noadd)){
                echo "<a href='{$arquivo}' class='list-group-item list-group-item-action'> $arquivo </a>";
                }
            }

            $diretorio -> close();
        */
        ?>

    </div>
    

    
</body>
</html>