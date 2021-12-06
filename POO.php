<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>POO</title>
</head>
<body>
    <h3>Programação Orientada a Objetos - Classes</h3>

    <p> Uma classe é um molde/forma/modelo a partir do qual criamos objetos. 
        Uma classe Humano, poderia servir de base para criarmos um cunjunto chamado Homem e outro mulher, 
        cada um partilhando o mesmo 'molde' mas com propriedades e funções com valores diferentes.
        Homen e Mulher tem muitas caracteristicas comuns entre si, mas cada um tem suas peculiaridades que os diferem um do outro.</p>

        <ul>class Humano
            
        <li>cabelo</li>
        <li>peso</li>
        <li>altura</li>
        <li>caminhar</li>
        </ul>
        <ul>Homem -> Humano
        <li>cabelo - castanho</li>
        <li>peso - 84</li>
        <li>altura - 167</li>
        <li>caminhar()</li>
        </ul>
        <ul>Mulher -> Humano
        <li>cabelo - preto</li>
        <li>peso - 65</li>
        <li>altura - 168</li>
        <li>caminhar()</li>
        </ul>

    <p>O corpo de uma classe contém PROPRIEDADES e MÉTODOS.</p>
    <p>PROPRIEDADES - São variáveis que guardam as característivas do objeto.</p>
    <p>MÉTODOS - São funções  que definem o que o objeto pode fazer.</p>
    <p>As propriedades podem ter níveis diferentes de acesso.</p>

    <?php 
    class FiguraGeometrica
    {
        public $largura, $altura
        public $x;
        public $y;

        function novaArea($a, $b)
        {
            return $a * $b;
        }
    }

    class Humano
    {
        public $nome = 'Rodrigo';
        public $sobrenome = 'Augusto';

        public function nomeCompleto()
        {
            return $this->nome. ' ' . $this->sobrenome;
        }
    }
    ?>

    


    
</body>
</html>