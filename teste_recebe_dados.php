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
    </form>
</div>

    <?php

    if (strlen($_POST['nome']) >= 3){
        $nome = $_POST['nome'];
        return $nome;
    }
    
    ?>


    
</body>
</html>