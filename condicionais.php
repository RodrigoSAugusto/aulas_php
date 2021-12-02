<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <h3>Declarações/Instruções Condicionais</h3>

    <p>São instruções utilizadas para controlar o fluxo da aplicação do acordo com determinadas condições.</p>

    <?php 
    
    # IF
    $nome = 'Rodrigo';
    if($nome == 'Rodrigo'){
        echo 'O Mello vai aumentar nosso salário! <br/><br/><br/><br/> ';
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
        echo "Ainda faltam $daysLeft para o seu aniversário.";
    };
    ?>

    
</body>
</html>