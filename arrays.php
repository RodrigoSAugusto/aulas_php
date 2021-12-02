<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>ARRAYS</h3>
    <p>Um array (traduzindo para PT é uma matriz) é na realidade uma coleção de valores.</p>
    <p>Funciona como uma variável mas que pode conter muitos valores, "arrumados" cada um no seu espaço.</p>
    <p>Esse 'espaço' é designado por índices do array.</p>

    <p>Resumindo, um array é uma coleção constituída por chaves/índices e valores, as chaves/índices podem ser numéricos (array numérico) ou strings (array associativo) e podem até coexistir os dois típos de índices no array.</p>
    <p>Os valores podem ser de qualquer tipo, inclusive serem outros arrays.</p>

    <p>Exemplos</p>
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
    <?php echo 'echo $nomes[1] retornara o valor "ana"'; ?><br/>
    <p>Lembrando que o índice de um array começa em '0'.</p>

    <?php $dados = [
        10 => 1000,
        20 => 2000,
        30 => 3000,
    ]; ?>
    <?php $dados[] = 4000; ?>
    <?php echo $dados[31]; ?>

    
</body>
</html>