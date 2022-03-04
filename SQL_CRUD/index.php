<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ajax.js"></script>
    <title></title>
</head>
<body>


    <div class="container">



        <h1>Agenda de Contatos</h1>
        <hr/>
        <h2>Inserir Contato:</h2>
        <div id='Insere'>
        <a href='sql_update.php' class='btn btn-info' role='button' >Inserir</a>
        </div>
        <h2>Pesquisar Contato:</h2>
        <div id='Pesquisar'>
            Informe o nome:
            <input type='text' name='txtnome' id='txtnome'/>
            <input type='button' class='btn btn-info' name='btnPesquisar' value='Pesquisar' onclick='getDados();'/>
        </div>
        <hr/>

        <h2>Resultados da pesquisa:</h2>
        <div id='Resultado'></div>
        <hr>

    </div>

</body>