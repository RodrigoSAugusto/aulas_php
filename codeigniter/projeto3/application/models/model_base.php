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
  }
}

//$funfa = new InsereGasto;
//$this->db->insert('gastos', $funfa);
