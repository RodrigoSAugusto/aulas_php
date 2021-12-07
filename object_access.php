<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>OBJECT ACCESS</title>
</head>
<body>
    <h3>OBJECT ACCESS</h3>

    <p>No PHP, um objeto instanciado a partir de uma classe pode acessar a elementos privados e protegidos de outro objeto</p>
    <p>criado a partir da mesma classe.</p>
    <p>Este comportamento não acontece na maior parte das outras linguagens de programação.</p>

    <?php 
    
    class Humano
    {
        private $nome = 'x';

        function setPrivate($objeto, $valor){
            $objeto->nome = $valor;
        }

        function apresentar(){
            echo $this->nome;
        }

        function getnome(){
            return $this->nome;
        }
    }

    $a = new Humano();
    $b = new Humano();
    $a->setPrivate($b, 'Rodrigo');
    echo $a->getnome(); 

    $a->apresentar();
    echo '<br>';
    $b->apresentar();
    
    ?>

    
</body>
</html>