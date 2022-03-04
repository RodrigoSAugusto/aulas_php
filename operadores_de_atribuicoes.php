<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Operadores</title>
</head>
<body>
    <div class="container">

        <h1><?php echo 'Operadores de Atribuição'?></h1>
        
        <p>
            Permitem alterar o valor de uma variável a partir do seu valor original.
        </p>

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

    </div>

</body>
</html>