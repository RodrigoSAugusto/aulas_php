<?php

class Model_base extends CI_Model
{

  public function InsereGasto()
  {
    $dados = array(
      'nome'    => $this->input->post('txtnome'),
      'tipo'    => $this->input->post('txttipo'),
      'valor'   => $this->input->post('txtvalor'),
      'parcela' => $this->input->post('txtparcelas'),
      'data'    => $this->input->post('txtdata')

    );

    $this->db->insert('gastos', $dados);
    redirect('core/index');
  }

  public function ConsultaGeral()
  {
    // Declara as variaveis do checkbox para usar como parametro.
    $desc = $this->input->post('descricao');
    $tipo = $this->input->post('tipogasto');
    $data = $this->input->post('data');

    // Aqui verificamos se a variavel do checkbox foi setada.
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
      echo "<tr><td>Descrição</td>"
        . "<td>Tipo</td>"
        . "<td>Valor</td>"
        . "<td>Data</td>"
        . "</tr>"; // Fechamos o cabeçalho.

      foreach ($query->result() as $row) {
        echo "<tr><td>$row->nome</td>"
          . "<td>$row->tipo</td>"
          . "<td>$row->valor</td>"
          . "<td>$row->data</td>"
          . "</tr>";
      }
    }
  }
}

//$funfa = new InsereGasto;
//$this->db->insert('gastos', $funfa);
