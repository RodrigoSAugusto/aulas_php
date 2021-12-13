<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Var Info</title>
</head>
<body>
    <div class="container">

        <h3>APRESENTAÇÃO DE INFORMAÇÕES DE VARIÁVEIS</h3>

        <p>
            O PHP tem três funções fundamentais para obtermos informações a partir de variáveis do nosso código.<br>
            <br>
            print_r<br>
            var_dump<br>
            var_export<br>
        </p>
        <br>
        <br>

        <h4>PRINT_R</h4>

        <p>
            Permite ver dados de uma variável de uma forma simples de ler.<br>
            É frequentemente usada para efeitos de debug.<br>
        </p>

        <?php
        
            $a = "Malk";
            print_r($a);
            echo '<br>';
            $b = [1,2,3,4];
            echo '<pre>';
            print_r($b);
            echo '</pre>';

        ?>


        <h4>VAR_DUMP</h4>

        <p>
            Tem um resultado semelhante ao print_r, mas para além dos valores apresenta também a informação do tipo de valores.<br>
        </p>

        <?php

            $nome = "Malkalan";
            echo '<pre>';
            var_dump($nome);
            echo '</pre>';

            echo '<pre>';
            $valores = [1,2,3,4];
            var_dump($valores);
            echo '</pre>';

        ?>

        <h4>VAR_EXPORT</h4>

        <p>
            Apresenta informações sobre uma variável num estilo que pide ser usado como código PHP.<br>
        </p>

        <?php

            $name = "Jamelão";
            echo '<pre>';
            var_export($name);
            echo '</pre>';

            echo '<pre>';
            $value = [1,2,3,4];
            var_export($value);
            echo '</pre>';

            $numbers = [];
            
            for($i=0; $i < 10; $i++){
                $numbers[]=rand(0,100);

            }
            echo '<pre>';
            var_export($numbers);
            echo '</pre>';

        ?>

    </div>
    
</body>
</html>