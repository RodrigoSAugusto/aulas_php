<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>

    <div class="container">

        <h3>Operadores Ternarios</p>

        <?php 

            $option = 0;

            echo $name = $option == 1 ? 'Atacléssio <br/>' : 'Adebair <br/>';
            
            echo $option == 1 ? $name ='Atacléssio <br/>' : $name = 'Adebair <br/>';
        
        ?>

    </div>

</body>
</html>