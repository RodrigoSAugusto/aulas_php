<div class="container">

  <h1>Controle de Gastos</h1>
  <hr>
</div>

<div class="container">
  <div class="row">
    <div class="col-3">
      <h2>Cadastrar Receita</h2>
      <form class="container" action="<?php echo site_url('core/inserereceita'); ?>" method="post">

        <p>
          Descrição da Receita: <br />
          <input type="text" placeholder="Breve descrição da receita" name="des_receita" id="des_receita" required />
        </p>

        <p>
          Informe o tipo de receita: <br />
          <select name="tip_receita" id="tip_receita" required>
            <option value="salario">Salário</option>
            <option value="vale">Vale Alimentação/Flash</option>
            <option value="outros">Outros</option>
          </select>
        </p>

        <p>
          Informe o valor da Receita: <br />
          <input type="text" name="val_receita" id="val_receita" required />
        </p>

        <p>
          Data de recebimento da receita <br />
          <input type="date" name="dat_receita" id="dat_receita" required />
        </p>

        <button class="btn btn-info">Inserir</button>

      </form>
    </div>


    <div class="col-3">
      <h2>Cadastrar Gasto</h2>

      <form class="container" action="<?php echo site_url('core/inseregasto'); ?>" method="post">
        <p>
          Descrição do gasto: <br />
          <input type="text" placeholder="Descrição do gasto" name="txtnome" id="txtnome" required />
        </p>

        <p>
          Informe o tipo de gasto: <br />
          <select name="txttipo" id="txttipo" required>
            <option value="credito">Crédito</option>
            <option value="debito">Débito</option>
            <option value="dinheiro">Dinheiro</option>
            <option value="vale_Alimentação/Flash">Vale Alimentação/Flash</option>
          </select>
        </p>

        <p>
          Informe o valor do gasto em reais: <br />
          <input type="text" name="txtvalor" id="txtvalor" required />
        </p>

        <p>
          Informe o número de parcelas: <br />
          <input type="text" placeholder="Numero de parcelas" name="txtparcelas" id="txtparcelas" required />
        </p>

        <p>
          Informe a data de vencimento: <br />
          <input type="date" placeholder="Data de vencimento/incerção" name="txtdata" id="txtdata" required />
        </p>

        <button class="btn btn-info">Inserir</button>
      </form>
    </div>
  </div>
</div>

<!-- Consulta os gastos no banco -->

<div class="container">

  <h2>Consulta de Gastos</h2>
  <br>
  <form class="container" action="<?php echo site_url('core/consultageral'); ?>" method="post">

    <p>
      Selecione o tipo de pesquisa e depois a referencia para pesquisa.
    </p>

    <div class="container">

      <div class="row">

        <div class="col-3">
          <!-- Campo para pesquisar item por nome/descrição -->

          <div>
            <input type="checkbox" id="descricao" name="descricao">
            <label for="descricao">Descrição</label>
          </div>

          <div>
            <input id="descricaotxt" name="descricaotxt" type="text">
          </div>

        </div>

        <div class="col-3">
          <!-- Campo para pesquisar item por "tipo" -->

          <div>
            <input type="checkbox" id="tipogasto" name="tipogasto">
            <label for="tipogasto">Tipo de Gasto</label>
          </div>

          <div>
            <input id="tipotxt" name="tipotxt" type="text">
          </div>

        </div>

        <div class="col-3">
          <!-- Campo para pesquisar item por data de incerção -->

          <div>
            <input type="checkbox" id="data" name="data">
            <label for="data">Data</label>
          </div>
          <div>
            <input id="datatxt" name="datatxt" placeholder="Ex: AAAA-MM-DD" type="text">
          </div>

        </div>
      </div>
      <br>
      <div>
        <button class="btn btn-info">Pesquisar</button>
      </div>

  </form>

</div>
