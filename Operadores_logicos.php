<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>
<body>
    <h3>Operadores Lógicos</h3>

    <p>Os operadores lógicos são frequentemente usados com os operadores de
        compração, eles permitem 'ligar' várias comparações avaliando se são verdadeiras ou falsas
        No PHP a construção correta de instruções condicionais depende destes operadores
        (instruções condicionais verificam se uma situação é verdadeira (true) ou falsa (false).</p>
        
    <?php 
    $a = 100;
    $b = 200;
    ?><br/><br/>
    <?php $x = ($a < $b) && ($a < 1000); # AND -> true
    
    if($x == 1){
        echo "($a < $b) && ($a < 1000) is True!";
    }else{
        echo "($a < $b) && ($a < 1000) is false!";
    }?><br/><br/>
    <?php $x = ($a > $b) || ($a > 1000); # OR -> false
    
    if($x == 1){
        echo "($a > $b) || ($a > 1000) is True!";
    }else{
        echo "($a > $b) || ($a > 1000) is false!";
    }?><br/><br/>
    <?php $x = ($a < 150) && ($a > 300); # false
    
    if($x == 1){
        echo "($a < 150) && ($a > 300) is True!";
    }else{
        echo "($a < 150) && ($a > 300) is false!";
    }?><br/><br/>
    <?php $x = ($a > 10) || ($a > 500);  # true
    
    if($x == 1){
        echo "($a > 10) || ($a > 500) is True!";
    }else{
        echo "($a > 10) || ($a > 500) is false!";
    }?><br/><br/>
    <?php $x = ($a == 100) && ($b < $a);  # false
    
    if($x == 1){
        echo "($a == 100) && ($b < $a) is True!";
    }else{
        echo "($a == 100) && ($b < $a) is false!";
    };?>
    ?> 
    
</body>
</html>