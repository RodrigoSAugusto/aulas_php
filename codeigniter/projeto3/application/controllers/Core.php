<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Core extends CI_Controller
{


  public function index()
  {
    $this->load->view('layout/header');
    $this->load->view('content');
    $this->load->view('layout/header');
  }

  public function inseregasto()
  {
    $this->load->model('model_base');
    $this->model_base->inseregasto();
  }
}
