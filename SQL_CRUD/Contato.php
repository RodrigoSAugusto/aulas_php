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
                    ."</tr>"; // Fechamos o cabeçalho. 
            }   

            //Vamos percorrer o array, e fazer a mesma coisa que fizemos em cima.
            //Montar uma linha, e as células da tabela.
            while($exibe=mysqli_fetch_array($result)) {
                $id = $exibe['id'];
                $update = 'sql_update.php' . '?id=' . $exibe['id'];
                //Não exibi todos os dados, agora é só você completar, colocando cada célula dentro de um <td>
                echo "<tr><td>$exibe[id]</td>"
                    ."<td>$exibe[numcadastro]</td>"
                    ."<td>$exibe[nome]</td>"
                    ."<td>$exibe[idade]</td>"
                    ."<td>$exibe[email]</td>"
                    ."<td>$exibe[sexo]</td>"
                    ."<td>$exibe[obs]</td>"
                    ."<td><a href='$update' class='btn btn-info' role='button' >Editar</a></td>"
                    ."</tr>";
            }
            // E fora do while fechamos a tabela.
            echo "</table>";

        }

        //Difine as variaveis do $_POST.
            if (!empty($_POST)){
                      
                $idup=$_POST['txtid'];
                $numcadastro=$_POST['numcadastro'];
                $nome=$_POST['nome'];
                $idade=$_POST['age'];
                $email=$_POST['email'];
                $sexo=$_POST['sexo'];
                $obs=$_POST['obs'];

                


                //Verifica se a variável esta vazia
                if (empty($idup)){
                    echo "<div class='container'>

                            <h1>Os campos estão vazios ou incorretos.</h1>
                            <hr/>
                    
                            <h2>Favor revisar os dados enviados.</h2>
                            <div id='Pesquisar'>

                                <a href='' class='btn btn-info' role='button'>Link Button</a>

                            </div>
                            
                    
                        </div>";

                } else {

                    $sql2 = "UPDATE cadastro SET numcadastro='$numcadastro',nome='$nome',idade='$idade',email='$email',sexo='$sexo',obs='$obs' WHERE id='$idup'";

                    if (mysqli_query($link, $sql2)) {
                        echo "<div class='alert alert-success' role='alert'>
                                    Registro atualizado com sucesso!!!
                                </div>
                                <a class='btn btn-primary' href='index.php' role='button'>Voltar para a Consulta</a>";
                    } else {
                        echo "Error: " . $sql2 . "<br>" . mysqli_error($link);
                    }

                    mysqli_close($link);
                }
            }
            
      

    
    ?>
        
</div>
        
    
</body>
</html>
