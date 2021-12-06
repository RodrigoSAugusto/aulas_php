<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Funções anômimas</title>
</head>
<body>
    <h3> Funções anônimas </h3>
    <p>Funções anônimas -> são funções normalmente simples atribuidas diretamenta as variáveis.</p>
    <?php 
    $falar = function($mensagem){    
        echo "Eu digo: $mensagem";
    };
    $falar('Estou aqui!');
    ?>
    <br/>
    <br/>
    <p>As funções anônimas são particularmente úteis quando as queremsos passar como argumentos para uma outra função.</p>
    <?php 
    $a = function()
    {
        return '<p>Função A</p>';
    };
    function falar($x){
        echo $x;
    };
    falar($a());
    ?>
    <h3> FUNÇÕES CLOSURE </h3>
    <p>São funções anônimas que podem usar variáveis do escopo global.</p>

    <?php
    $x = 20;
    $y = 30;

    $minhaClosure = function($z) use($x, $y){
        echo "$z + $x + $y = " . $z + $x + $y;
        $y += 1000; # esta instrução não vai alterar o valor de $y
    };

    $minhaClosure(10);

    echo "<p>$y</p>"; # o valor de $y não foi alterado na closure.
    ?>

    <h3> ARROW FUNCTIONS </h3>
    <p>São funções anônimas escritas de uma forma mais curta. Foram introduzidas no PHP 7.4, e tem a especificidade de capturar automaticamente as variáveis globais.</p>
    <?php
    $x = 20;
    $y = 30;

    $minha_arrow = fn($z) => "$x - $y - $z"; #usamos a palavra reservada fn e não necessita de chaves e nem return.
        echo $minha_arrow(10);
 
    ?>
    
</body>
</html>