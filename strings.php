<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Strings</h3>
    <?php $text1 = "Em PHP, as strings podem ser delimitadas por aspas simples ' (single quote) e aspas duplas \" (double quote).";
    echo $Newtext1 = wordwrap($text1, 70); ?>
    <br/>
    <br/>
    <?php
    $a = 'Esta é uma string.';
    $b = "Esta é outra string.";
    ?>
    <?php echo $a;?>
    <br/>
    <?php echo $b;?>
    
    <p>Nas PSRs não existe uma orientação definida para o uso de aspas 
        simples ou aspas duplas. Devemos ser consistentes ao logo do nosso código.</p>

    <br/>    
    <br/>

    <?php $text2 = "É o processo que, através do codigo, permite juntar árias strings. Existem dois operadores de concatenação: <br>\n . (ponto)<br>\n .= (ponto igual)";
    echo $Newtext2 = wordwrap($text2, 70); ?>
    <br/>    
    <br/>
    
    <?php $c = 'Rodrigo' . ' ' . 'Augsuto';  echo "O ponto liga as diferentes strings."?>
    <br/>
    <?php echo $c ?>
    <br/>    
    <br/>
    <?php $d = 'Rodrigo';
    $d .= ' ' . 'Augusto';  echo "o .= faz uma concatenação com o valor já existente na string" ?>
    <br/>
    <?php echo $d ?>

</body>
</html>