<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Core extends CI_Controller
{


  public function index()
  {

    $this->load->view('template/cabecalho');
    $this->load->view('pagina1');
    $this->load->view('template/rodape');
  }

  public function pagina2()
  {

    $this->load->view('template/cabecalho');
    $this->load->view('pagina2');
    $this->load->view('template/rodape');
  }

  public function pagina3()
  {

    $this->load->view('template/cabecalho');
    $this->load->view('pagina3');
    $this->load->view('template/rodape');
  }
}
