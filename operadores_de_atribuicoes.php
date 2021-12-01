<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1><?php echo 'Operadores de Atribuição'?></h1>
    <p>OPERADORES DE ATRIBUIÇÃO</br>
    Permitem alterar o valor de uma variável a partir do seu valor original.</p>

    <?php echo $a = 10 ?>;

    <?php echo $b = $a + 20 ?> # 30 </br>
    <?php echo $c = $a - 3 ?> # 7 </br>
    <?php echo $d = $a * 2 ?>  # 20 </br>
    <?php echo $e = $a / 2 ?>  # 5 </br>

    </br>
    <h2>Simplificando...</h2></br>
    </br>
    <?php echo $a += 20?> # 30 </br>
    <?php $a = 10 ?>
    <?php echo $a -= 3?>  # 7 </br>
    <?php $a = 10 ?>
    <?php echo $a *= 2?>  # 20 </br>
    <?php $a = 10 ?>
    <?php echo $a /= 2?>  # 5 </br>
    </br>

    
</body>
</html>