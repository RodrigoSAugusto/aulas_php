<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Testando variaveis</title>
</head>
<body>
    <div class="container">
        <h3>TESTANDO CARIAVEIS</h3>
    </div>

    <div class="container">
        <p>
            Acontece inúmeras vezes no nosso código a necessidade de verificar ou testar a exixtncia de variaveis ou do seu valor.
            Para isso o PHP contém em conjunto de construções internas que nos permitem fazer essa verificação.
        </p>
        <p>
            "ISSET" - esta construção permite verificar se uma variavel está ou não definida. Ela retorna verdadeiro se a variável existe, e falso se não existe.
        </p>
    </div>

    <div class="container">
        <?php 
        
            $a = 1;
            if(isset($a)){
                echo "A variavel existe! <br>";
            } else {
                echo 'A variável Não existe! <br>';
            }
        
        ?>
    </div>

    <div class="container">
        <p>
            Se tivermos uma variavel definida, mas o seu valor for null, é considerada como uma variável inexistente.
        </p>

        <?php 
        
            $b = null;
            echo isset($b) ? 'sim' : 'não';

        ?>
    </div>

    <div class="container">

            <h3>EMPTY</h3>
        
        <p>
            Verifica se a variável tem um valor vazio (null, 0, false ou strong vazia) e retorna verdadeiro ou falso.
        </p>

        <?php
        $x = 'João';
        empty($b); # false

        $y = false;
        empty($y); # true

        $nomes = [];
        empty($nomes); # true

        $outro = null;
        empty($outro); #true
        ?>
    </div>

    <div class="container">

            <h3>IS_NULL</h3>
        
        <p>
            Verifica se a variável tem um valor null ou não;
        </p>

        <?php
        $x = 'João';
        is_null($b); # false

        $y = null;
        is_null($y); # true
        
        ?>
    </div>




    
</body>
</html>