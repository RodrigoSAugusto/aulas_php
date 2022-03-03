<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Novo extends CI_Controller
{

  public function index()
  {

    $this->load->view('template/cabecalho');
    $this->load->view('template/rodape');
  }
}
