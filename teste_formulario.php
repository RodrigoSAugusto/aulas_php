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
        table {
            
            border-collapse: collapse;
            background-image: ulr(https://lirp.cdn-website.com/095db2c8/dms3rep/multi/opt/Medicalway+-+Logomarca%2BSlogan+%28Branca%29-277w.png);
            background-size: 100% auto;
            color: #456456;
        }
        tr {
            height: 40px;
        }
        td {
           
            border: 1px solid black;
        }

        
    </style>
</head>
<body>
    <form method="POST" action="teste_formulario.php">
    <table>
        <thead>
            <tr>
                <th colspan="2" center>Formulario de Cadastro</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2"><label for="nome" >Nome:</label><input type="text" maxlength="255" name="nome" /></td>
                
            </tr>
            <tr>
                <td rowspan=""><label for="idade" >Idade:</label><input type="int" maxlength="2" name="idade" /></td>
                <td rowspan=""><label for="email" >E-mail:</label><input type="email" maxlength="255" name="email" /></td>
            </tr>
            <tr>
                <td colspan="2"><label for="sexo">Sexo:</label><select name="sexo" id="sexo"><option></option><option value="outro">Outro</option><option value="Masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; vertical-align: middle;">Observações:</td>
                <td><textarea maxlength="400" name="obs" ></textarea></td>
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
        apaga();
    }
    function apaga() {
        unset($_POST);
        unset($_REQUEST);
        
    }?>
        </form>

    <?php 

        if(!empty($_POST['nome'])  && $_POST['sexo'] != null){
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
                    <th colspan="2" center>Cadastro</th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nome</td>
                <td><?php echo $nome; ?></td>
            </tr> 
            <tr>
                <td>Idade</td>
                <td><?php echo $idade; ?></td>
            </tr> 
            <tr>
                <td>E-mail</td>
                <td><?php echo $email; ?></td>
            </tr> 
            <tr>
                <td>Sexo</td>
                <td><?php echo $sexo; ?></td>
            </tr> 
            <tr>
                <td>Obsevações</td>
                <td style="wid~th:50%;"><?php echo $obs; ?></td>
            </tr> 
        </tbody>
    </table>
    

    
</body>
</html>