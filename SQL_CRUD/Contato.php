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
    <title>batata</title>
</head>
<body>



<div class="container">

    <?php

        //Inclui a conexão com banco de dados.
        include 'sql_connect.php';

        
      
        //Verifica se txtnome esta definido, se não estiver, difine a variavel $nome = txtnome
        if (isset($_GET["txtnome"])){
            $nome = $_GET["txtnome"];
            

            //Verifica se a variável esta vazia
            if (empty($nome)){
                $sql = "SELECT * FROM cadastro";

            } else {
                $nome .= "%";
                $sql = "SELECT * FROM cadastro WHERE nome like '$nome'";
            }

            sleep(1);
            $result = mysqli_query($link, $sql);
            

            //Aqui verificamos se existe algum registro da query.
            if(mysqli_num_rows($result)>0) {
                echo "<table class='table table-bordered table-striped table-dark'>"; //Criamos a tabela
                //Aqui criamos o cabeçalho da tabela.
                // A tag <tr> abre uma linha, enquanto a <td> abre uma célula.
                echo "<tr><td>ID</td>"
                    ."<td>Cadastro</td>"
                    ."<td>Nome</td>"
                    ."<td>Idade</td>"
                    ."<td>Email</td>"
                    ."<td>Sexo</td>"
                    ."<td>Observações</td>"
                    ."<td>Editar</td>"
                    ."<td>Deletar</td>"
                    ."</tr>"; // Fechamos o cabeçalho. 
            }   

            //Percorre o array retornado do banco
            while($exibe=mysqli_fetch_array($result)) {

                //Popula a variavel 'id' para ser usada na tabela.
                $id = $exibe['id'];
                
                //Popula a variavel 'update' para ser usada como link no botão.
                $update = 'sql_update.php' . '?id=' . $exibe['id'];
                
                // Popula a tabela com os dados retornados do banco.
                echo "<tr><td>$exibe[id]</td>"
                    ."<td>$exibe[numcadastro]</td>"
                    ."<td>$exibe[nome]</td>"
                    ."<td>$exibe[idade]</td>"
                    ."<td>$exibe[email]</td>"
                    ."<td>$exibe[sexo]</td>"
                    ."<td>$exibe[obs]</td>"
                    ."<td><a href='$update' class='btn btn-info' role='button' >Editar</a></td>" //Link para página de edição de cadastro.
                    ."<td><input type='button' class='btn btn-danger' value='Deletar' onclick='delDados($id); getDados();'></td>" //Chama a função AJAX para deletar dados da tabela.
                    ."</tr>";
   
            }
            // E fora do while fechamos a tabela.
            echo "</table>";

        }


///////////////////////////////// SQL DE UPDATE E INSERT NO BANCO ///////////////////////////////////////////////


        //Difine as variaveis do $_POST.
        if (!empty($_POST['txtid'])){
                    

            $idup=$_POST['txtid'];
            $numcadastro=$_POST['numcadastro'];
            $nome=$_POST['nome'];
            $idade=$_POST['age'];
            $email=$_POST['email'];
            $sexo=$_POST['sexo'];
            $obs=$_POST['obs'];

             

            $sql2 = "UPDATE cadastro SET numcadastro='$numcadastro',nome='$nome',idade='$idade',email='$email',sexo='$sexo',obs='$obs' WHERE id='$idup'";

            if (mysqli_query($link, $sql2)) {
                echo "<div class='alert alert-success' role='alert'>
                            Registro deu boa demais!!!
                        </div>
                        <a class='btn btn-primary' href='index.php' role='button'>Voltar para a Consulta</a>";
            } else {
                echo "Error: " . $sql2 . "<br>" . mysqli_error($link);
            }

            mysqli_close($link);
            
        

        } else { 
            //Verifica se a variável "txtid" esta vazia e a "nome" esta populada. Se sim executa o insert.
            if (!empty($_POST['nome'])){
                
                //popula as variáveis
                $numcadastro=$_POST['numcadastro'];
                $nome=$_POST['nome'];
                $idade=$_POST['age'];
                $email=$_POST['email'];
                $sexo=$_POST['sexo'];
                $obs=$_POST['obs'];

                // Insere novos dados no banco cadastro.
                $sql1 = "INSERT INTO cadastro (numcadastro, nome, idade, email, sexo, obs) VALUES ('$numcadastro', '$nome', '$idade', '$email', '$sexo', '$obs')";

                    // Executa e verifica o insert.
                    if (mysqli_query($link, $sql1)) {

                        // Exibe mensagem de sucesso.
                        echo "<div class='alert alert-success' role='alert'>
                                    Registro realizado com sucesso!!!
                                </div>
                                <a class='btn btn-primary' href='index.php' role='button'>Voltar para a Consulta</a>";
                    } else {

                        // Exibe mensagem de Erro.
                        echo "Error: " . $sql1 . "<br>" . mysqli_error($link);
                    }

                mysqli_close($link);

                
            }
        }

    ?>
        
</div>
        
    
</body>
</html>
