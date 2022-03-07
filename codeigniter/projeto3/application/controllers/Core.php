<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Core extends CI_Controller
{


  public function index()
  {
    $this->load->view('pagina_inicial');
  }

  public function gravar()
  {
    //Grava dados no banco.
    $valores = [
      $this->input->post('text_nome'),
      $this->input->post('text_telefone')
    ];

    // grava os dados no banco
    $this->db->query('INSERT INTO dbcontact(nome, telefone) VALUES(?, ?)', $valores);
  }
}
