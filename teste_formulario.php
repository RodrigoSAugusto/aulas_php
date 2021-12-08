<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Cadastro</title>
    <style>
        div {  
            color: #123123;
            padding-left: 10px;
            padding-right: 10px;
            margin-bottom: 10px;
        }
        table {
            border-collapse: collapse;
            background-size: 100% auto;
            color: #123123;
        }
        tr {
            height: 40px;
            width: 100px auto;
        }
        td {         
            border: 1px solid black;
            width: 200px auto;
            height: 40px;
        }       
    </style>
</head>
<body>
    <div>
    <form method="POST" action="teste_formulario.php">
    <table>
        <thead>
            <tr>
                <th colspan="2" center>Formulario de Cadastro</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2"><label for="nome" >Nome:</label><input type="text" minlength="3" maxlength="255" name="nome" /></td>
                
            </tr>
            <tr>
                <td rowspan=""><label for="idade" >Idade:</label><input type="int" maxlength="2" name="idade" /></td>
                <td rowspan=""><label for="email" >E-mail:</label><input type="email" minlength="20" maxlength="255" name="email" /></td>
            </tr>
            <tr>
                <td colspan="2"><label for="sexo">Sexo:</label><select name="sexo" id="sexo"><option></option><option value="outro">Outro</option><option value="Masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; vertical-align: middle;">Observações:</td>
                <td><textarea rows="5" cols="33" minlength="10" maxlength="400" name="obs" ></textarea></td>
            </tr>
        </tbody>
        <submi>    
    </table>
    <br/>
        <input type="submit">
        <input type="submit" name="apaga_post" value="Apaga" />

    <br/>    
    
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['apaga_post']))
    {
        apaga(); # Apaga os dados do POST
    }
    function apaga() {
        unset($_POST);
        unset($_REQUEST);
        
    }?>
        </form>

    <?php 

        if(!empty($_POST['nome'])  && $_POST['sexo'] != null){ # != null porque o atributo sexo devolvia valor mesmo quando não setado.
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $email = $_POST['email'];
            $sexo = $_POST['sexo'];
            $obs = $_POST['obs'];
        } else {
            $nome = 'Seu nome aparecera aqui!';
            $idade = 'Sua idade aparecera aqui!';
            $email = 'Seu email aparecera aqui!';
            $sexo = 'Seu sexo aparecera aqui!';
            $obs = 'Sua observação aparecera aqui!';

        }

  
    
    ?>

    <table>
        <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle;" colspan="2" center>Cadastro</th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center; vertical-align: middle;" >Nome</td>
                <td><?php echo $nome; ?></td>
            </tr> 
            <tr>
                <td style="text-align: center; vertical-align: middle;" >Idade</td>
                <td><?php echo $idade; ?></td>
            </tr> 
            <tr>
                <td style="text-align: center; vertical-align: middle;" >E-mail</td>
                <td><?php echo $email; ?></td>
            </tr> 
            <tr>
                <td style="text-align: center; vertical-align: middle;" >Sexo</td>
                <td><?php echo $sexo; ?></td>
            </tr> 
            <tr>
                <td style="text-align: center; vertical-align: middle;" >Obsevações</td>
                <td rows="2" cols="33"><?php echo $obs; ?></td>
            </tr> 
        </tbody>
    </table>
    
</body>
</html>