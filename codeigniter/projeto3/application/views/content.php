<div class="container">

  <h1>Controle de Gastos</h1>
  <hr>
  <h2>Inserir Gasto</h2>

  <form class="container" action="<?php echo site_url('core/inseregasto'); ?>" method="post">
    <input type="text" name="txtnome" id="txtnome" required />
    <input type="text" name="txttipo" id="txttipo" required />
    <input type="valor" name="txtvalor" id="txtvalor" required />
    <input type="parcelas" name="txtparcelas" id="txtparcelas" required />
    <button class="btn btn-info">Inserir</button>
  </form>

</div>
