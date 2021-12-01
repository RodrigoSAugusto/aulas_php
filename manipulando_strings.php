<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php $text1 = "STRINGS são variáveis muito especiais dentro do PHP. Existem dezenas de funções para ratamento de strings. Por exemplo, podemos apresentar um determinado caracter de uma string da seguinte forma: ";
    echo $newtext = wordwrap($text1, 70) ?>
    <br/>
    <?php $frase = 'Esta frase tem 29 caracteres.';?><br/>
    <?php $n = '<br>';?><br/>
    <?php echo $frase ?>
    <br/>
    <p>Apresenta o primeiro caracter da string.</p><br/>
    <?php echo $frase[0]; ?><br/>
    <?php echo $n; ?><br/>

    <p>Apresenta o sexto caracter da string.</p><br/>
    <?php echo $frase[5]; ?><br/>

    <p>Podemos comparar strings da seguinte forma:</p><br/>
    <br/>
    <?php $a = 'Rodrigo'; ?><br/>
    <?php echo $a; ?><br/>
    <?php $b = 'Augusto'; ?><br/>
    <?php echo $b; ?><br/>
    <br/>
    <?php 
    ob_start();
    $c = $a == $b ? true : false;
    var_dump($c);
    $result = ob_get_clean();
    echo "Rodrigo = Augusto ->" . $result  ?>

    <p>Algumas funções nativas do PHP para trabalhar com strings:</p><br/>

    <?php echo "O strlen() retorna o número de caracteres de uma string, a frase do primeiro exemplo tem " . strlen($frase) . " caracteres."; ?><br/>
    
    <?php echo "O substr() retorna os caracteres a partir de uma posição especificada e por uma quantidade especifica de caracteres"; ?> <br/>
    <?php echo 'substr($frase, 0, 4) -> ' . $primeira_palavra = substr($frase, 0, 4); ?><br/>

</body>
</html>