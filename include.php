<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
    <div class="container">
        <h3>IMPORTAR SCRIPTS COM INCLUDE</h3>
    </div>
    <div class="container">
        <p>
            A grande maioria dos projetos de programação vão sempre necessitar de ter o seu código "partido" entre diferentes ficheiros. 
            Salvo raras excessões, um projeto terá dezenas ou centenas de ficheiros para que a aplicação funcione.
        </p>
    </div>

    <div class="container">
        <p>
            É aqui que entram os mecanismos de importação de scripts dentro de outros scripts.
            A importação pode  ser feita recorrendo ao uso da instrução include.
        </p>
    </div>

    <div class="container">
        <p>
            NOTA: o include, à semelhança do echo, são construções especiais do PHP e não requerem a utilização de parentêntesis.
        </p>
    </div>

    <div class="container">
        <p>
            include 'config.php';
        </p>
    </div>
    <div class="container">
        <p>
            Esta instrução vai inserir o código de programação do script config.php dentro do script atual.
        </p>
    </div>

</body>
</html>