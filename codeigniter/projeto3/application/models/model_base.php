<?php

class Model_base extends CI_Model
{

  public function BalancoMensal()
  {
    // Este método gera um balanço dos gastos e receitas mensais e monta uma tabela.
    // $data_inicio = $this->input->post('mes_inicio');
    $data_fim    = $this->input->post('mes_fim');




    //  $this->db->like('data', $data_inicio);
    // $this->db->from('gastos');
    // $valores_1 = $this->db->get();

    $this->db->like('data', $data_fim);
    $this->db->from('gastos');
    $valores_2 = $this->db->get();



    echo "<div class='container'>"
      . "<table class='table table-bordered table-striped table-dark'>"
      . "<thead><tr><th colspan='4'>Gastos</th></tr></thead>";

    foreach ($valores_1->result() as $row) {
      echo "<tfooter><tr><td colspan='3'>$row->nome</td>"
        . "<td>$row->valor</td></tr></tfooter>";
    }
    foreach ($valores_2->result() as $row) {
      echo "<tfooter><tr><td colspan='3'>$row->nome</td>"
        . "<td>$row->valor</td></tr></tfooter>";
    }

    $this->db->like('data', $data_inicio);
    $this->db->select_sum('valor');
    $this->db->from('gastos');
    $total = $this->db->get();

    // Apresenta o valor da soma na tela
    foreach ($total->result() as $row) {
      echo "<tfooter><tr><td colspan='3'>Total</td>"
        . "<td>$row->valor</td></tr></tfooter>"
        . "</table></div><br>";
    }

    $this->db->like('data_receita', $data_inicio);
    $this->db->from('receita');
    $receita = $this->db->get();

    echo "<div class='container'>"
      . "<table class='table table-bordered table-striped table-dark'>"
      . "<thead><tr><th colspan='4'>Receita</th></tr></thead>";

    foreach ($receita->result() as $row) {
      echo "<tfooter><tr><td colspan='3'>$row->data_receita</td>"
        . "<td>$row->valor_receita</td></tr></tfooter>";
    }

    $this->db->like('data_receita', $data_inicio);
    $this->db->select_sum('valor_receita');
    $this->db->from('receita');
    $total = $this->db->get();

    // Apresenta o valor da soma na tela
    foreach ($total->result() as $row) {
      echo "<tfooter><tr><td colspan='3'>Total</td>"
        . "<td>$row->valor_receita</td></tr></tfooter>"
        . "</table></div><br>";
    }
  }


  public function InsereReceita()
  {
    // Este método gera um array associando os campos preenchidos pelo usuário com os campos correspondentes do banco. 
    $receita = array(
      'descricao_receita'  => $this->input->post('des_receita'),
      'tipo_receita'       => $this->input->post('tip_receita'),
      'valor_receita'      => $this->input->post('val_receita'),
      'data_receita'       => $this->input->post('dat_receita')
    );

    // Cria a conexão com o banco e insere os dados fornecidos pelo usuário
    $this->db->insert('receita', $receita);
    redirect('core/index');
  }


  // ======================================================== Insere Gasto ======================================================================================================

  public function InsereGasto()
  {
    // Este método gera um array associando os campos preenchidos pelo usuário com os campos correspondentes do banco.
    $gasto = array(
      'nome'    => $this->input->post('txtnome'),
      'tipo'    => $this->input->post('txttipo'),
      'valor'   => $this->input->post('txtvalor'),
      'parcela' => $this->input->post('txtparcelas'),
      'data'    => $this->input->post('txtdata')

    );

    // Cria a conexão com o banco e insere os dados fornecidos pelo usuário
    $this->db->insert('gastos', $gasto);
    redirect('core/index');
  }


  // ========================================================= Consulta Geral ====================================================================================================


  public function ConsultaGeral()
  {
    // Declara as variaveis do checkbox para usar como parametro.
    $desc = $this->input->post('descricao');
    $tipo = $this->input->post('tipogasto');
    $data = $this->input->post('data');


    // Aqui verificamos se a variavel do checkbox "descrição" foi setada.
    if (isset($desc)) {
      // Aqui populamos a variavem $nome com o dado passado pelo usuário.
      $nome = $this->input->post('descricaotxt');
      // Aqui informamos qual campo do banco vamos buscar.
      $this->db->like('nome', $nome);
      // Aqui a query sql é contruida e usada para popular a varavel $query.
      $query = $this->db->get('gastos');

      echo "<table class='table table-bordered table-striped table-dark'>"; //Criamos a tabela
      //Aqui criamos o cabeçalho da tabela.
      // A tag <tr> abre uma linha, enquanto a <td> abre uma célula.

      echo "<thead><tr><td colspan='4'>Pesquisa por Descrição</td></tr>"
        . "<tr><td>Descrição</td>"
        . "<td>Tipo</td>"
        . "<td>Valor</td>"
        . "<td>Data</td>"
        . "</tr></thead>"; // Fechamos o cabeçalho.

      // Criamos agora o corpo da tabela e populamos com o resultado da consulta sql.
      foreach ($query->result() as $row) {
        echo "<tbody><tr><td>$row->nome</td>"
          . "<td>$row->tipo</td>"
          . "<td>$row->data</td>"
          . "<td>$row->valor</td>"
          . "</tr></tbody>";
      }

      // Aqui montamos outra consulta no banco para gerar a soma total de valores referente a pesquisa.
      $this->db->like('nome', $nome);
      $this->db->select_sum('valor');
      $this->db->from('gastos');
      $total = $this->db->get();

      // Apresenta o valor da soma na tela
      foreach ($total->result() as $row) {
        echo "<tfooter><tr><td colspan='3'>Total</td>"
          . "<td>$row->valor</td></tr></tfooter> </div>";
      }
    }

    if (isset($tipo)) {
      // Aqui populamos a variavem $nome com o dado passado pelo usuário.
      $tipo = $this->input->post('tipotxt');
      // Aqui informamos qual campo do banco vamos buscar.
      $this->db->like('tipo', $tipo);

      // Aqui a query sql é contruida e usada para popular a varavel $query.
      $query = $this->db->get('gastos');

      echo "<table class='table table-bordered table-striped table-dark'>"; //Criamos a tabela
      //Aqui criamos o cabeçalho da tabela.
      // A tag <tr> abre uma linha, enquanto a <td> abre uma célula.
      echo "<thead><tr><td colspan='4'>Pesquisa por Tipo de Gasto</td></tr>"
        . "<tr><th>Descrição</th>"
        . "<th>Tipo</th>"
        . "<th>Data</th>"
        . "<th>Valor</th>"
        . "</tr></thead>"; // Fechamos o cabeçalho.

      // Criamos agora o corpo da tabela e populamos com o resultado da consulta sql.
      foreach ($query->result() as $row) {
        echo "<tbody><tr><td>$row->nome</td>"
          . "<td>$row->tipo</td>"
          . "<td>$row->data</td>"
          . "<td>$row->valor</td>"
          . "</tr></tbody>";
      }

      // Aqui montamos outra consulta no banco para gerar a soma total de valores referente a pesquisa.
      $this->db->like('tipo', $tipo);
      $this->db->select_sum('valor');
      $this->db->from('gastos');
      $total = $this->db->get();

      // Apresenta o valor da soma na tela
      foreach ($total->result() as $row) {
        echo "<tfooter><tr><td colspan='3'>Total</td>"
          . "<td>$row->valor</td></tr></tfooter> </div>";
      }
    }

    if (isset($data)) {
      // Aqui populamos a variavem $nome com o dado passado pelo usuário.
      $data = $this->input->post('datatxt');
      // Aqui informamos qual campo do banco vamos buscar.
      $this->db->like('data', $data);
      // Aqui a query sql é contruida e usada para popular a varavel $query.
      $query = $this->db->get('gastos');

      echo "<table class='table table-bordered table-striped table-dark'>"; //Criamos a tabela
      //Aqui criamos o cabeçalho da tabela.
      // A tag <tr> abre uma linha, enquanto a <td> abre uma célula.
      echo "<thead><tr><td colspan='4'>Pesquisa por Tipo de Gasto</td></tr>"
        . "<tr><td>Descrição</td>"
        . "<td>Tipo</td>"
        . "<td>Valor</td>"
        . "<td>Data</td>"
        . "</tr></thead>"; // Fechamos o cabeçalho.

      // Criamos agora o corpo da tabela e populamos com o resultado da consulta sql.
      foreach ($query->result() as $row) {
        echo "<tbody><tr><td>$row->nome</td>"
          . "<td>$row->tipo</td>"
          . "<td>$row->data</td>"
          . "<td>$row->valor</td>"
          . "</tr></tbody>";
      }

      // Aqui montamos outra consulta no banco para gerar a soma total de valores referente a pesquisa.
      $this->db->like('data', $data);
      $this->db->select_sum('valor');
      $this->db->from('gastos');
      $total = $this->db->get();

      // Apresenta o valor da soma na tela
      foreach ($total->result() as $row) {
        echo "<tfooter><tr><td colspan='3'>Total</td>"
          . "<td>$row->valor</td></tr></tfooter> </div>";
      }
    }
  }
}
