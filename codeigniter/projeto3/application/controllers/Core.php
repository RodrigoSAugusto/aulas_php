<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Core extends CI_Controller
{


  public function index()
  {

    $this->load->model('contato');
    $this->load->view('layout/header');
    $this->load->view('content');
    $this->load->view('layout/header');
  }

  public function consulta()
  {
    $this->load->view('bastion');
    $this->load->view('Incoming');
    $this->load->view('common');
  }
}
