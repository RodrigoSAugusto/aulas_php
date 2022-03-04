<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Operadores de Comparação</title>

</head>
<body>
    <div class="container">
        <h3> Operadores de Comparação</h3>

        <?php $text1 = 'Permitem efetuar uma comparação entre valores. Verificam se os valoressão iguais, diferentes, maiores ou menores, ou do mesmo tipo.';
        echo $newtext1 = wordwrap($text1, 70, "<br />\n");
        ?>
        <br/>

        <p><?php $text2 = "O resultado da comparação será sempre o valor verdadeiro (true) ou falso (false). Veja exemplos abaixo:";
        echo $newtext2 = wordwrap($text2, 70, "<br />\n"); ?></p>

        <?php 
            $a  = (2 == 3);

            if($a == 1){
                echo "2 == 3 is True!";

            }else{
                echo "2 == 3 is false!";

            }
            echo '<br>';

            $a  = (100 == 100); 

            if($a == 1){
                echo "100 == 100 is True!";

            }else{
                echo "100 == 100 is false!";
            
            }

            echo '<br>';
            $a  = (50 == '50');

            if($a == 1){
                echo "50 == '50' is True!";

            }else{
                echo "50 == '50' is false!";

            }
            echo '<br>';
        
            $a  = (50 === '50');

            if($a == 1){
                echo "50 === '50' is True!";

            }else{
                echo "50 === '50' is false!";

            }
            echo '<br>';
        ?>
        <br/>
        <br/>
        <br/>
        <?php 

            $a  = (2 != 3); 

            if($a == 1){
                echo "2 != 3 is True!";

            }else{
                echo "2 != 3 is false!";

            }
            echo '<br>';

            $a  = (100 != 100);

            if($a == 1){
                echo "100 != 100 is True!";

            }else{
                echo "100 != 100 is false!";

            }
            echo '<br>';
        ?>
        <br/>
        <?php 
            $a  = (50 != '50');

            if($a == 1){
                echo "50 != '50' is True!";

            }else{
                echo "50 != '50' is false!";

            }
            echo '<br>';
            
            $a  = (50 !== '50');

            if($a == 1){
                echo "50 !== '50' is True!";

            }else{
                echo "50 !== '50' is false!";

            }
            echo '<br>';
        ?>
        <br/>
        <br/>
        <p>
            NOTA: Lembrando que os operadores === e !== comparam valor e tipo de valor.
        </p>

        <br/>

        <?php 

            $a  = (2 > 3);
            if($a == 1){
                echo "2 > 3 is True!";


            }else{
                echo "2 > 3 is false!";

            }
            echo '<br>';
            $a  = (2 < 3);
            if($a == 1){
                echo "2 < 3 is True!";

            }else{
                echo "2 < 3 is false!";

            }
            echo '<br>';
            
            $a  = (50 >= 50);
            if($a == 1){
                echo "50 >= 50 is True!";

            }else{
                echo "50 >= 50 is false!";

            }
            echo '<br>';
            
            $a  = (50 <= 50);
            if($a == 1){
                echo "50 <= 50 is True!";

            }else{
                echo "50 <= 50 is false!";

            }
            echo '<br>';

            $a  = (50 < 50);
            if($a){
                echo "50 < 50 is True!";

            }else{
                echo "50 < 50 is false!";

            }
            echo '<br>';
        ?>
        <br/>
        <br/>
        <br/>
        <br/>
        <p>
            <?php 
                $text3 = "No PHP 7 foi adicionado um novo operador de comparação designado como spaceship operator '<=>' (O nome 'spaceship' é pelo fato de o operador parcer um tie Fighter do Star Wars!)";
                echo $newtext3 = wordwrap($text3, 70, "<br />\n");

                $x  = 1 <=> 1;

                if($x == 0){
                    echo "1 <=> 1 is 0  'Se os dois valores comparados iguas, o retorno será 0.'";

                }else{
                    echo "erro";

                }
                echo '<br>';
        
                $x  = 3 <=> 2;

                if($x == 1){
                    echo "3 <=> 2 is 1  'Se o valor da esquerda for maior que o da direita, o retorno será 1.'";

                }else{
                    echo "erro";

                }
                echo '<br>';
                
                $x  = 1 <=> 2;

                if($x == -1){
                    echo "1 <=> 2 is -1  'Se o valor da esquerda for menor que o da direita, o retorno será -1.'";

                }else{
                    echo "erro";

                }
                echo '<br>';
            ?>
        <br/>
    </div>
</body>
</html>