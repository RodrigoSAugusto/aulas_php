<div class="container">

  <h1>Controle de Gastos</h1>
  <hr>
  <h2>Inserir Gasto</h2>

  <form class="container" action="<?php echo site_url('core/inseregasto'); ?>" method="post">
    <p>
      Descrição do gasto: <br />
      <input type="text" placeholder="Descrição do gasto" name="txtnome" id="txtnome" required />
    </p>

    <p>
      Informe o tipo de gasto: <br />
      <select name="txttipo" id="txttipo" required>
        <option value="cred">Crédito</option>
        <option value="deb">Débito</option>
        <option value="din">Dinheiro</option>
        <option value="vale">Vale Alimentação/Flash</option>
      </select>
    </p>

    <p>
      Informe o valor do gasto em reais: <br />
      <input type="text" class="dinheiro form-control" style="display:inline-block" name="txtvalor" id="txtvalor" required />
    </p>

    <p>
      Informe o número de parcelas: <br />
      <input type="text" placeholder="Numero de parcelas" name="txtparcelas" id="txtparcelas" required />
    </p>

    <p>
      Informe a data de vencimento da primeira parcela ou a data em que foi ou será debitada: <br />
      <input type="date" placeholder="Data de vencimento/incerção" name="txtdata" id="txtdata" required />
    </p>

    <button class="btn btn-info">Inserir</button>
  </form>

</div>

<!-- Consulta os gastos no banco -->

<div>

  <form class="container" action="<?php echo site_url('core/consultaGasto'); ?>" method="post">

    <p>
      Selecione o tipo de pesquisa e depois a referencia para pesquisa.
    </p>
    <!--
    <p>

      <select name="txtpesquisa" id="txtpesquisa">

        <option value="desc">Descrição</option>
        <option value="tgas">Tipo de Gasto</option>
        <option value="data">Data</option>

      </select>

    </p>
-->
    <div class="container">

      <input type="checkbox" id="descricao" name="descricao" checked>
      <label for="descricao">Descrição</label>
      <input type="text" id="desc" name="desc">
    </div>

    <div class=" container">

      <input type="checkbox" id="tipogasto" name="tipogasto">
      <label for="tgas">Tipo de Gasto</label>

    </div>

    <div class="container">

      <input type="checkbox" id="data" name="data">
      <label for="dat">Data</label>

    </div>

    <button class="btn btn-info">Inserir</button>

  </form>

</div>
