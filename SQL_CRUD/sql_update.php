<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ajax.js"></script>
    <title></title>
</head>
<body>

    <?php
    
    $id=$_GET['id'];
    
    include 'sql_connect.php';
  
    $sql = "SELECT * FROM cadastro WHERE id like '$id'";

    $consulta = mysqli_query($link, $sql);
    $exibe=mysqli_fetch_array($consulta, MYSQLI_ASSOC);

   
    ?>

        <div class="col-md-5 col-md-offset-1">

            <div class='Container'>

                <h1>
                    Atualização de cadastro
                </h1>
                
                <form method="POST" action="Contato.php" >

                <div class="form-group">
                    <label for="exampleInputEmail1">id</label>
                    <input type="text" class="form-control" name="txtid" id="txtid" value="<?php echo $exibe['id'] ?>" readonly>
                    <small  class="form-text text-muted">O id não deve ser alterado.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">N° Cadastro</label>
                    <input type="text" class="form-control" name="numcadastro" id="numcadastro" placeholder="<?php echo $exibe['numcadastro'] ?>">
                    <small  class="form-text text-muted">Alteração do N° de cadastro deve ser requisitada na central.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="<?php echo $exibe['nome'] ?>">
                    <small  class="form-text text-muted">O nome deve estar completo.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Idade</label>
                    <input type="text" class="form-control" name="age" id="age" placeholder="<?php echo $exibe['idade'] ?>">
                    <small  class="form-text text-muted">Idade no momento do cadastro.</small>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $exibe['email'] ?>">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>

                <div class="form-group">
                    <label for="sexo">Sexo:</label>
                    <select name="sexo" class="form-control" name="sexo" id="sexo"><option></option><option value="outro">Outro</option><option value="Masculino">Masculino</option>
                    <option value="feminino">Feminino</option></select>
                </div>

                <div class="form-group">
                    <label for="obs">Observações:</label>
                    <textarea class="form-control" rows="5" cols="33" minlength="10" maxlength="400" name="obs" ></textarea>
                </div>

                <button type="submit" class="btn btn-primary" onclick="updateDados();">Enviar</button>
                </form>

            </div>
            
        </div>

</body>
