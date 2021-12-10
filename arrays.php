<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Arrays</title>
</head>
<body>
    <div class="container">
        <h3>ARRAYS</h3>
        <p>
            Um array (traduzindo para PT é uma matriz) é na realidade uma coleção de valores.
        </p>
        <p>
            Funciona como uma variável mas que pode conter muitos valores, "arrumados" cada um no seu espaço.
        </p>
        <p>
            Esse 'espaço' é designado por índices do array.
        </p>

        <p>
            Resumindo, um array é uma coleção constituída por chaves/índices e valores, 
            as chaves/índices podem ser numéricos (array numérico) ou strings (array associativo) 
            e podem até coexistir os dois típos de índices no array.
        </p>
        <p>
            Os valores podem ser de qualquer tipo, inclusive serem outros arrays.
        </p>
        <br/>

        <h4>Exemplos</h4>

        <?php $valores = array(1,2,3,10,20,30); ?>

        <?php echo '$valores = array(1,2,3,10,20,30)'; ?><br/>

        <?php $nomes = array('joao', 'ana', 'carlos'); ?><br/>

        <?php echo "\$nomes = array('joao', 'ana', 'carlos')"; ?><br/>


        <p>A partir do PHP 5.4, passou a ser possível escrever os dados de forma mais simplificada.</p>

        <?php $valores = [1,2,3,10,20,30]; ?>

        <?php echo '$valores = [1,2,3,10,20,30]'; ?><br/>

        <?php $nomes = ['joao', 'ana', 'carlos']; ?><br/>

        <?php echo "\$nomes = ['joao', 'ana', 'carlos']"; ?><br/>
        <br/>
        <?php echo ' echo $valores[0] retornará o valor "1"'; ?><br/>
        <br/>
        <?php echo 'echo $nomes[1] retornara o valor "ana"'; ?><br/>
        <br/>
        <p>Lembrando que o índice de um array começa em '0'.</p><br/>

        <br/>

        <p>Formas de inserir dados no array.</p><br/>

        <?php 
            $dados = [
                10 => 1000,
                20 => 2000,
                30 => 3000,
            ]; 
        ?>

        <?php $dados[] = 4000; ?><br/>

        <?php $dados[1] = 2001; # $dados = [1000, 2001, 3000, 4000] ?><br/>


        <?php array_push($dados, 5000); # $dados = [1000, 2001, 3000, 4000, 5000] ?><br/>

       

        <h3>ARRAYS MULTIDIMENCIONAIS</h3>

        <br/>

        <p>São arrays numéricos ou associativos, cujos valores são outros arrays.</p>
        
        <?php 
            $dados = [
                [10, 20, 30, 40],
                [100, 200, 300, 400],
                [1000, 2000, 3000, 4000]
            ];
            echo $dados[1][2].'<br/>'; #300
            echo $dados[0][1].'<br/>'; #20
            
            $cidades = [
                'brasil' => ['curitiba', 'são paulo', 'salvador'],
                'canada' => ['toronto', 'new brusiwinsk', 'alberta'],
                'japao' => ['toquio', 'okinawa', 'fukushima']
            ];

            echo $cidades['japao'][1].'<br/>'; #okinawa
            echo $cidades['canada'][1].'<br/>'; #new brusiwinsk

        ?>
    </div>
</body>
</html>