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
    <form method="POST" action="enviar_mail.php" >
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" >
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="text" class="form-control" name="idade" >
        </div>
        
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" >
        </div>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select name="sexo" class="form-control" name="sexo" ><option></option><option value="outro">Outro</option><option value="Masculino">Masculino</option>
            <option value="feminino">Feminino</option></select>
        </div>
        <br/>
        <div class="form-group">
            <label for="obs">Observações:</label>
            <textarea class="form-control" rows="5" cols="33" minlength="10" maxlength="400" name="obs" ></textarea>
        </div>
        
        <input type="submit"class="btn btn-default">
      

        
        </form>
    </div>

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

        
    </body>
</html>