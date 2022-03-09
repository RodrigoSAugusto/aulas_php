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
    redirect('Core');
  }

  public function consultar()
  {

    // Nome a ser consultado no banco.
    $consulta = [
      $this->input->post('consulta')
    ];



    $dados = $this->db->query('SELECT * FROM dbcontact WHERE nome LIKE ?', $consulta);
    echo $dados;
    // $this->load->view('pagina_inicial', $dados);
  }
}
