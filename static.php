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
    <h3>STATIC</h3>

    <p>A palavra chave static pode ser usada para declarar propriedades e métodos de uma classe que podem ser acessados sem que seja necessário criar um objeto a partir desta classe.</p>

    <?php

    class Teste
    {
        // instance members - um membro pr cada objeto a partir da classe.
        public $nome;
        function teste(){
            // código aqui
        }
        
        // static ou class members - apenas existentes uma vez na classe
        static $idade;
        static function contar(){
            // código aqui
        }
    }
    ?>
    
    <!-- implementando -->

    <?php 
    
    class Operacoes
    {
        static $valor1;
        static $valor2;

        static function adicionar(){
            return self::$valor1 + self::$valor2;
            // retursn Operacoes;;$valor1 + operacoes::$valor2; alternativa
        }
    }
    
    Operacoes::$valor1 = 10;
    Operacoes::$valor2 = 20;
    echo Operacoes::adicionar();
    
    ?>


    
</body>
</html>