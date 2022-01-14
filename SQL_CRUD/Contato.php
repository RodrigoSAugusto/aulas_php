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

    

    if (!isset($cabecalho)){
        $cabecalho = "<div id='Container'>
                <h1>Agenda de Contatos utilizando AJAX</h1>
                <hr/>

                <h2>Pesquisar Contato:</h2>
                <div id='Pesquisar'>
                    Infome o nome:
                    <input type='text' name='txtnome' id='txtnome'/>
                    <input type='button' name='btnPesquisar' value='Pesquisar' onclick='getDados();'/>
                </div>
                <hr/>

                <h2>Resultados da pesquisa:</h2>
                <div id='Resultado'></div>
                <hr>";
    } else {
        return;
    }
        
    echo $cabecalho;

?>





    <?php

    include 'sql_connect.php';
    

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
                    ."</tr>"; // Fechamos o cabeçalho. 
            }   

            //Vamos percorrer o array, e fazer a mesma coisa que fizemos em cima.
            //Montar uma linha, e as células da tabela.
            while($exibe=mysqli_fetch_array($result)) {
                $id = $exibe['id'];
                    //Não exibi todos os dados, agora é só você completar, colocando cada célula dentro de um <td>
                    echo "<tr><td>$exibe[id]</td>"
                        ."<td>$exibe[numcadastro]</td>"
                        ."<td>$exibe[nome]</td>"
                        ."<td>$exibe[idade]</td>"
                        ."<td>$exibe[email]</td>"
                        ."<td>$exibe[sexo]</td>"
                        ."<td>$exibe[obs]</td>"
                        ."</tr>";
                }
                // E fora do while fechamos a tabela.
                echo "</table>";

    }  
        ?>
        

        
    
</body>
</html>