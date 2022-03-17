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
      <select placeholder="Tipo do gasto" name="txttipo" id="txttipo" required>
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

  <div class="container">

    <h1>Codeigniter Fullcalendar example - ItSolutionStuff.com</h1>

    <a href="<?php echo site_url('core/fullcalendar') ?>">Carregar</a>

    <div class="row" style="width:80%">

      <div class="col-md-12">

        <div id="calendar"></div>

      </div>

    </div>

  </div>

</div>
