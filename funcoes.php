<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Funçõess</title>
</head>
<body>
    <h3>Funções</h3>

    <p> As funções são blocos de codigo identificadas por um nome e que permitem que o código seja reutilizado e organizado de uma forma muito mais consistente.</p>
    <p> Este blocos só serão executados quando solicitados.</p>
    <p> Definimos uma função usando a palavra reservada function, seguida de um nome, um conjunto de parâmetros e um bloco de código.</p>

    <h4>Exemplo:</h4>

    <p>function Nome_da_funcao()</p>
    <?php 
    echo 'Inicio da aplicação.';
    echo '<br>';
    executar();

    function executar()
    {
        echo 'A função foi executada.';
    }
    
    ?>
   
    <p> Podemos passar para função certos parametros para sua execução, estes vão dentro dos parênteses na chamada da função e são separados por virgula.</p>
    <p> Exemplo:</p>

    <p>function soma(x, y)</p>

    <form method="post" action="">
        <p>Defina o valor de x:  <input type="int" name="x"></p>
        <p>Defina o valor de y: <input type="int" name="y"></p>
        <p><input type="submit" value="Enviar"></p>
        
    </form>
    
    <?php 
        
        if(!empty($_POST['x'])){
            $x = $_POST['x'];
            $y = $_POST['y'];
            echo soma($x, $y);
        } else {
            echo "Preencha os valores de x e y e envie para obter o resultado da soma!";
        }
     ?>

    <?php function soma($a, $b){
        echo "$a + $b = " . ($a + $b);
        
    } ?>
    <br/>

    <form action="funcoes.php" method="post">
    <input type="submit" name="escreve_algo" value="Escreve" />
    </form>
    <br/>
    <?php
   
    
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['escreve_algo']))
    {
        escreve();
    }
    function escreve() {
        echo "Este botão escreve algo ao ser clicado";
        
    }
    ?>
    <br/>
    <br/>
    <form action="funcoes.php" method="post">
    <input type="submit" name="apaga_algo" value="Apaga" />
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['apaga_algo']))
    {
        apaga();
    }
    function apaga() {
        unset($_POST);
        unset($_REQUEST);
        
    }
    ?>

</body>
</html>