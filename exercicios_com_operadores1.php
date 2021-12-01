<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php echo "1 - 'a' é  igual a 100 e 'b' é igual a 3 vezes o valor de 'a'.<br/>"; ?>

<?php echo " Apresente o valor de 'b'.<br/>"; ?>

<?php $a = 100; ?>

<?php $b = $a * 3; ?>

<?php echo $b; ?>
<br/>
<br/>

<?php echo "2 - 'c' é iniiado e apresentado com o valor 20.<br/>"; ?>
<?php echo "na instrução seguinte, 'c' dverá ser apresentado co o valor 21.<br/>"; ?>

<?php $c = 20; ?>

<?php echo $c; ?>
<?php echo '<br/>'; ?>
<?php echo ++$c; ?>
<?php echo '<br/>'; ?>
<?php echo '<br/>'; ?>

<?php echo "3 - 'd' é igual a 100, 'e' é igual a 250, 'f' é igual a 'd' mais 'e'.<br/>"; ?>
<?php echo "print 'f' e depois acrescente mais uma unidade a 'f' e apresente novamente."; ?>
<?php echo '<br/>'; ?>
<?php $d = 100; ?>
<?php $e = 250; ?>
<?php $f = $d + $e; ?>
<?php echo $f; ?>
<?php echo '<br/>'; ?>
<?php echo ++$f; ?>
<?php echo '<br/>'; ?>

    

    
</body>
</html>