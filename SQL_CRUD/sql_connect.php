<?php  
    // Cria conexão com banco de dados.

    $link = mysqli_connect('', 'root', '', 'teste');

    // Vereifica a conexão.

    if (!$link) {
        die('Não foi possível conectar: ' . mysqli_error()); 
    }

    

    // Insere no banco as variaveis geradas a partir do POST.

    //if (!empty($id)){
   //     $sql = "INSERT INTO cadastro (numcadastro, nome, idade, email, sexo, obs) VALUES ('$id', '$nome', '$idade', '$email', '$sexo', '$obs')";
  //  } else {
  //      echo "Cadastro invalido.";
  //      return false;
 //   }
    
  //  if (mysqli_query($link, $sql)) {
  //      echo "Cadastro gravado com sucesso!";
  //  } else {
  //      echo "Erro: " . $sql . "<br>" . mysqli_error($link);
  //  }



?>

