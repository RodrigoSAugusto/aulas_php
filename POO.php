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
    <br/>
    <?php 
        class FiguraGeometrica
        {
            public $largura, $altura;
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
        $batata = new Humano();

        echo $batata->nomeCompleto();
    ?>
     <br/>
    <h3>CONSTRUCTOR</h3>

    <p> O CONSTRUCTOR, é um método especial dentro de uma classe que é sempre executdo automaticamente quando é criado um objeto a partir de uma classe.</p>
    <p> Este método é definido de uma forma especial com __ (dois underscors). São chamados métodos magicos porque têm uma execução específica ou automática associada.</p>
    <br/>
    <?php 
        class Batata
        {
            private $tipo;
            private $cor;

            function __construct($t, $c){
                $this->tipo = $t;
                $this->cor = $c;
            }

            public function descricao(){
                return "Batatas do tipo " . $this->tipo . " são geralmente da cor " . $this->cor;
            }
        }

        $potato = new Batata('Irlandesa', 'azul');

        echo $potato->descricao();
    ?>
     <br/>
    <h3>HERANÇA</h3>

    <p> Para herdar uma classe a partir de outra, usamos a expressão extends.</p>
    <br/>
    <?php 
        class BatataFrita extends Batata
        {
            public $forma_corte;
            public $qtd_sal;
            public $tipo_oleo;

            function __construct(){} # adicionado para não ser necessário declarar os parametros do construtor da classe pai. 

            function fritar(){
                return "Para fritar batatas do tipo {$this->tipo} precisamos usar o corte tipo {$this->forma_corte}, fritar em um óleo de {$this->tipo_oleo} e usar cerca de {$this->qtd_sal} de sal.";
            }
        }
        
        $fritada_monstra = new BatataFrita();
        $fritada_monstra->tipo = "Irlandesa";
        $fritada_monstra->forma_corte = "canoa";
        $fritada_monstra->tipo_oleo = "soja";
        $fritada_monstra->qtd_sal = "15g";

        echo $fritada_monstra->fritar();
    ?>
    <br/>
    <h3>OVERRIDING</h3>

    <p> O mecanismo de overriding permite a uma casse derivada ter métodos reescritos especificamente para a classe.</p>
    <p> Por exemplo, podemos ter um método TESTE na classe e ter o mesmo método TESTE com código diferente na classe derivada.</p>
    <br/>
    <?php
        class Animal
        {
            function mover(){
                echo 'Mover a partir da classe base.';
            }
        } 

        class Mamifero extends Animal
        {

        }

        class Peixes extends Animal
        {
            function mover(){
                echo 'Mover a partir da classe peixe.';
            }
        }
        
        $animal = new Animal();
        echo $animal->mover();
        echo '<br>';
        $mamifero = new Animal();
        echo $mamifero->mover();
        echo '<br>';
        $peixe = new Peixes();
        echo $peixe->mover();
    ?>
    <br/>
    <h3>PARENT</h3>
    <p> Podemos chamar o construtor da classe base usando a expressão parent.</p>
    <p> A expressão parent é um nome alternativo para o nome da classe base.</p>
    <br/>
    <?php

        class Batata2 {
            
            public $tipo1;
            public $tipo2;
            
            public function __construct($valor1,$valor2){
                $this->tipo1 = $valor1;
                $this->tipo2 = $valor2;
            }
            
            public function getTipo1(){
                return $this->tipo1;
            }
            
            public function getTipo2(){
                return $this->tipo2;
            }
            
        }

        class BatataFrita2 extends Batata2 {
            
            public function __construct($tipo1,$tipo2){
                parent::__construct($tipo1,$tipo2);
            }
            
        }

        $objeto = new BatataFrita2('Valor 1','Valor 2');
        print $objeto->getTipo2();
    ?>
    <br/>
    <h3>FINAL</h3>
    <p> Para impedir que uma classe derivada possa fazer override de métodos</p>
    <p> Podemos utilizar a expressão FINAL da seguinte forma: final function "nome da função()"</p>

    <?php 
    
    class Veiculo
    {
        final function mover(){
            echo "dromedálio";
        }
    }
    
    class Bicicleta extends Veiculo
    {
    //  function mover(){   -> erro apresentado por nao ser possível fazer override do método da classe base.
    //      echo "dendrobata";
    //  }
    }
    ?>
    <p> Podemos, inclusive, definir uma classe como não sendo possível ser herdada </p>
    <p> colocando FINAL antes de CLASS.</p>
    <?php 
    
    final class Mesa
    {
        // código aqui.;
    }

    //class Mesa_sala extends Mesa  ->Fatal error: Class Mesa_sala may not inherit from final class (Mesa)
    {
        // Código aqui.;
    }
    ?>
    <br/>
    <h3>ACCESS LEVELS</h3>
    <p> Existem 3 tipos de níveis de acesso a elementos dentro de uma classe.</p>
    <p> public, protected e private</p>

    <?php 
    
    class MinhaClasse
    {
        public $v1;
        protected $v2;
        private $v3;
    }

    class ClasseDerivada extends MinhaClasse
    {
        function testada(){
            echo $this->v1;  # possível
            echo $this->v2;  # possível
            echo $this->v3;  # ERRO
        }
    }

    $test = new MinhaClasse();
    $test->v1 = '111';  # possível
    $test->v2 = '222';  # ERRO
    $test->v3 = '333';  # ERRO

    $test2 = new ClasseDerivada();
    $test2->v1 = '111';  # possível
    $test2->v2 = '222';  # ERRO
    $test2->v3 = '333';  # ERRO
    
    ?>
</body>
</html>