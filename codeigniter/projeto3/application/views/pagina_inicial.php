<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>

<head>
  <title>Data Base</title>
</head>

<body>

  <h3>Insere contatos no banco</h3>
  <!-- formulário cadastro -->

  <form action="<?php echo site_url('core/gravar') ?>" method="post">

    <label>Nome</label><br>
    <input type="text" name="text_nome"><br>

    <label>Telefone</label><br>
    <input type="text" name="text_telefone"><br><br>

    <input type="submit" value="Gravar">

  </form>

  <br><br>
  <!-- formulário de consulta -->

  <h3>Consultar nomes no banco</h3>

  <form action="<?php echo site_url('core/consultar') ?>" method="post">

    <label>Nome</label><br>
    <input type="text" name="consulta"><br><br>

    <input type="submit" value="Consultar">

  </form>

  <?php print_r($dados[0]); ?>

  <p>O nome consultado foi: <?php echo $nome[0]; ?></p>

  <p>Esta funcionando direito.</p>

</body>

</html>
