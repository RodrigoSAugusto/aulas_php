<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>

<head>
  <title>Data Base</title>
</head>

<body>

  <!-- formulário -->

  <form action="<?php echo site_url('core/gravar') ?>" method="post">

    <label>Nome</label><br>
    <input type="text" name="text_nome"><br>

    <label>Telefone</label><br>
    <input type="text" name="text_telefone"><br><br>

    <input type="submit" value="Gravar">

  </form>

  <p>Esta funcionando direito.</p>

</body>

</html>
