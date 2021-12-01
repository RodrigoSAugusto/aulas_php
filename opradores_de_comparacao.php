<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>
</head>
<body>
    <h3> Operadores de Comparação</h3>

    <?php $text1 = 'Permitem efetuar uma comparação entre valores. Verificam se os valoressão iguais, diferentes, maiores ou menores, ou do mesmo tipo.';
    echo $newtext1 = wordwrap($text1, 70, "<br />\n");
     ?>
     <br/>

    <p><?php $text2 = "O resultado da comparação será sempre o valor verdadeiro (true) ou falso (false). Veja exemplos abaixo:";
    echo $newtext2 = wordwrap($text2, 70, "<br />\n"); ?></p>

    <?php $a  = (2 == 3);?><br/>
    <?php if($a == 1){
        echo "2 == 3 is True!";
    }else{
        echo "2 == 3 is false!";
    }
    ?><br/>
    <?php $a  = (100 == 100);?><br/>
    <?php if($a == 1){
        echo "100 == 100 is True!";
    }else{
        echo "100 == 100 is false!";
    }
    ?><br/>
    <?php $a  = (50 == '50');?><br/>
    <?php if($a == 1){
        echo "50 == '50' is True!";
    }else{
        echo "50 == '50' is false!";
    }
    ?><br/>
    <?php $a  = (50 === '50');?><br/>
    <?php if($a == 1){
        echo "50 === '50' is True!";
    }else{
        echo "50 === '50' is false!";
    }
    ?><br/>
    <br/>
    <br/>
    <?php $a  = (2 != 3);?><br/>
    <?php if($a == 1){
        echo "2 != 3 is True!";
    }else{
        echo "2 != 3 is false!";
    }
    ?><br/>
    <?php $a  = (100 != 100);?><br/>
    <?php if($a == 1){
        echo "100 != 100 is True!";
    }else{
        echo "100 != 100 is false!";
    }
    ?><br/>
    <?php $a  = (50 != '50');?><br/>
    <?php if($a == 1){
        echo "50 != '50' is True!";
    }else{
        echo "50 != '50' is false!";
    }
    ?><br/>
    <?php $a  = (50 !== '50');?><br/>
    <?php if($a == 1){
        echo "50 !== '50' is True!";
    }else{
        echo "50 !== '50' is false!";
    }
    ?><br/>
    <br/>
    <p>NOTA: Lembrando que os operadores === e !== comparam valor e tipo de valor.</p>
    <br/>
    <?php $a  = (2 > 3);?><br/>
    <?php if($a == 1){
        echo "2 > 3 is True!";
    }else{
        echo "2 > 3 is false!";
    }
    ?><br/>
    <?php $a  = (2 < 3);?><br/>
    <?php if($a == 1){
        echo "2 < 3 is True!";
    }else{
        echo "2 < 3 is false!";
    }
    ?><br/>
    <?php $a  = (50 >= 50);?><br/>
    <?php if($a == 1){
        echo "50 >= 50 is True!";
    }else{
        echo "50 >= 50 is false!";
    }
    ?><br/>
    <?php $a  = (50 <= 50);?><br/>
    <?php if($a == 1){
        echo "50 <= 50 is True!";
    }else{
        echo "50 <= 50 is false!";
    }
    ?><br/>
    <?php $a  = (50 < 50);?><br/>
    <?php if($a){
        echo "50 < 50 is True!";
    }else{
        echo "50 < 50 is false!";
    }
    ?><br/>
    <br/>
    <br/>
    <br/>
    <p><?php $text3 = "No PHP 7 foi adicionado um novo operador de comparação designado como spaceship operator '<=>' (O nome 'spaceship' é pelo fato de o operador parcer um tie Fighter do Star Wars!)";
    echo $newtext3 = wordwrap($text3, 70, "<br />\n"); ?></p>
    <?php $x  = 1 <=> 1;?><br/>
    
    <?php if($x == 0){
        echo "1 <=> 1 is 0  'Se os dois valores comparados iguas, o retorno será 0.'";
    }else{
        echo "erro";
    }
    ?><br/>
    <?php $x  = 3 <=> 2;?><br/>
    <?php if($x == 1){
        echo "3 <=> 2 is 1  'Se o valor da esquerda for maior que o da direita, o retorno será 1.'";
    }else{
        echo "erro";
    }
    ?><br/>
    <?php $x  = 1 <=> 2;?><br/>
    <?php if($x == -1){
        echo "1 <=> 2 is -1  'Se o valor da esquerda for menor que o da direita, o retorno será -1.'";
    }else{
        echo "erro";
    }
    ?><br/>
    <br/><br/><br/><br/>
</body>
</html>