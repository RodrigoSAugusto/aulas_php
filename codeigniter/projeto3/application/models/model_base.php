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

  public function ConsultaGasto()
  {
    $desc = $this->input->post('desc');
    $tgas = $this->input->post('tgas');
    $dat = $this->input->post('dat');


    print_r($this->db->get_where('gastos', array('nome' => $desc, 'tipo' => $tgas, 'data' => $dat)));
  }
}

//$funfa = new InsereGasto;
//$this->db->insert('gastos', $funfa);
