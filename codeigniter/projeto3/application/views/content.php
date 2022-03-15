<div class="container">

  <h1>Controle de Gastos</h1>
  <hr>
  <h2>Inserir Gasto</h2>

  <form class="container">
    <input type="text" name="txtgasto" id="txtgasto" />
    <input type="text" name="txttipo" id="txttipo" />
    <input type="valor" name="txtvalor" id="txtvalor" />
    <input type="parcelas" name="txtparcelas" id="txtparcelas" />
    <input type="button" class="btn btn-info" name="btnInsere_db" value="Inserir" onclick="<?php $this->load->model('contato'); ?>" />
  </form>

</div>
