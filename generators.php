<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Generators</title>
</head>
<body>
    <div class="container">
        
        <h3>GENERATORS</h3>
        <br/>
        <p> Um gerador é uma cunção que permite gerar séries de valores.
            Cada valor é devolvido pela função através da instrução yield.
            Ao contrario do return, a instrução yield guarda o estado da função, 
            permitindo que a função continue a partir do estado onde ficou na última chamada.
        </p>

        <p>
            function buscar_numero(){
                for($i = 0; $i < 10; $i++){
                    yield $i;
                }
            }</p>


        <?php 
            function buscar_numero(){
                for($i =0; $i < 10; $i++){
                    yield $i;
                }
            }
        ?>
        <p> 
            A função geradora funciona como um iterador, podendo ser usada num ciclo até que o 
            gerador não tenha mais valores para devolver com o yield.
        </p>

        <?php 

            foreach(buscar_numero() as $numero){
                echo " $numero<br>";
            };

        ?>
        <p> Existe também a variação 'yield from' que permite outro tipo de retorno</p>
        <p> devolver valores de outro gerador;</p>
        <p> devolver valores de um array;</p>

        <?php 

            function buscar_nomes(){
                yield 'Rodrigo';
                yield 'Raphaela';
                yield from ['Bruno', 'Anna', 'Everton'];
                yield 'Fernando';
            }

            echo '<hr>';
            foreach(buscar_nomes() as $nome){
                echo "$nome<br>";
            }
        
        ?>

    </div>
 
</body>
</html>