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
        <h2>Cadastro</h2>
    <form method="POST" action="formulario2.php" >
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="text" class="form-control" name="idade" required>
        </div>
        
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select name="sexo" class="form-control" name="sexo" required><option></option><option value="outro">Outro</option><option value="Masculino">Masculino</option>
            <option value="feminino">Feminino</option></select>
        </div>
        <br/>
        <div class="form-group">
            <label for="obs">Observações:</label>
            <textarea class="form-control" rows="5" cols="33" minlength="10" maxlength="400" name="obs" required></textarea>
        </div>
        
        <input type="submit"class="btn btn-default">
        <input type="submit" class="btn btn-default" name="apaga_post" value="Apaga" />

        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['apaga_post']))
            {
                apaga(); # Apaga os dados do POST
            }
            function apaga() {
                unset($_POST);
                unset($_REQUEST);
            }
        ?>
        </form>
    </div>

    <?php 
    print_r($_POST)
    ?>

    <?php 
        

        if(!empty($_POST['nome'])){ # != null porque o atributo sexo devolvia valor mesmo quando não setado.
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
    <br/>
    <br/>
    <div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th colspan="2" center>Cadastro</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2"><?php echo "Nome: " . $nome; ?></td>
                
            </tr>
            <tr>
                <td rowspan=""><?php echo "Idade: " . $idade; ?></td>
                <td rowspan=""><?php echo "E-mail: " . $email; ?></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo "Sexo: " . $sexo; ?></td>
                
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; vertical-align: middle;"><?php echo "Observações: " . $obs; ?></td>
                
            </tr>
        </tbody>   
    </table>
    </div>
        
     
     


        
    </body>
</html>