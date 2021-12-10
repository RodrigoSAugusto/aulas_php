<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Condicionais</title>
</head>
<body>
    <div class="container">
        <h3>Declarações/Instruções Condicionais</h3>

        <p>São instruções utilizadas para controlar o fluxo da aplicação do acordo com determinadas condições.</p>

        <?php 
        
        # IF
        $frase = 'O Mello vai aumentar nosso salário!';
        $nome = 'Rodrigo';
        if($nome == 'Rodrigo'){
            echo $frase . '<br/><br/><br/><br/> ';
        }

        # IF ELSE
        $dateBirthday = new \DateTime('2021-12-12');
        $dateBorn = new \DateTime('1991-12-12');
        $dateNow = new \DateTime(date('Y-m-d'));
        $age = $dateBorn->diff($dateNow);
        $age->format('%Y');
        $days = $dateNow->diff($dateBirthday);
        $daysLeft = $days->format('%d');
        

        if($age < '30'){
            echo "Ja fez aniversario este ano! Parabéns!";
        }else{
            echo "Ainda faltam $daysLeft dias para o seu aniversário.";
        };
        ?>
    
        <h3>Como identificar os funcionario da TI</h3>

        
        <form method="post" action="">

            <p>Tem ou já teve barba média/grande?(s/n) <input type="text" name="answer1"></p>
            <p>Tem olhos castanhos claro?(s/n) <input type="text" name="answer2"></p>
            <p><input type="submit" value="Enviar"></p>
            
            
        </form>

        <?php
        $list_frase = explode(" ", $frase);

        if(empty($_POST)){
            die;
        }

        if($_POST['answer1'] == 'n'){
            echo "Então é o Bruno!<br/><br> ";
        } else {
            if($_POST['answer2'] == 's'){
                echo "Então é o Rodrigo!<br/> <br>";
            } else {
                echo "Então é o Everton!<br/> <br>";
            }
        }
        ?>
        <?php 
        switch ($list_frase[5]){
            case 'salário!':
                echo 'O switch com explode funcionou!<br/> <br>';
                break;
            default:
                echo "Algo de errado não esta certo!<br/> <br>";
        }
        ?>

        <?php 
        $x = 0;

        while ($x < 10){
            echo "Ciclo em execução! <br><br>";
            $x++;
        }

        for ($y = 1; $y < 10; $y++) {
            echo $y . ' Esse é o for rodando. <br> <br>';
        }

        $x = 0;

        foreach ($list_frase as $words){
            echo $words . ' <= Estas são palavras da segunda frase do scrypt! <br> <br>';
        }
        ?>
    </div>
    
    
</body>
</html>