<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Core extends CI_Controller
{


  public function index()
  {
    $this->load->view('layout/header');
    $this->load->view('content');
    $this->load->view('layout/footer');
  }

  public function deleta()
  {
    $this->load->view('layout/header');
    $this->load->view('content');
    $this->load->view('layout/footer');
  }

  public function insert()
  {
    $this->load->view('layout/header');
    $this->load->view('content');
    $this->load->view('layout/footer');
  }

  public function update()
  {
    $this->load->view('layout/header');
    $this->load->view('content');
    $this->load->view('layout/footer');
  }

  public function consulta()
  {
    $this->load->view('layout/header');
    $this->load->view('Incoming');
    $this->load->view('layout/footer');
  }
}
