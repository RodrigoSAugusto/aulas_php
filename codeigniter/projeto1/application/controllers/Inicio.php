<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{


  public function index()
  {

    $this->load->view('templates/cabecalho');
    $this->load->view('conteudo');
    $this->load->view('templates/rodape');
  }

  public function outra()
  {

    $this->load->view('templates/cabecalho');
    $this->load->view('pagina2');
    $this->load->view('templates/rodape');
  }
}
