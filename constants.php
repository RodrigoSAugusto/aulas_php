<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CONSTANTS</title>
</head>

<body>
    <div class="container">
        <h3>CONSTANTS</h3>

        <p>As cosntantes são variéveis cujo valor atribuido na sua definição não pode ser alterado ao longo do script de PHP.</p>
        <p>O PHP permite definir constantes de duas formas: com o termo const e como o método define.</p>

        <h3>CONST</h3>

        <p>O const é usado para definir constantes no contexto de classes, ao contrario de propriedades public, protected ou private,
            as propriedades const estão semore visiveis (são públicas). Como não podem ser alteradas no valor, não existe o risco de ficarem expostas.
        </p>

        <?php 
            class Circulo
            {
                const PI = 3.1415;
            }
        
        ?>
    </div>

    
</body>
</html>