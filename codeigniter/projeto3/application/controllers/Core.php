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

  public function balancomensal()
  {
    $this->load->view('layout/header');
    $this->load->model('model_base');
    $this->model_base->balancomensal();
    $this->load->view('layout/footer');
  }

  public function inserereceita()
  {
    $this->load->view('layout/header');
    $this->load->model('model_base');
    $this->model_base->inserereceita();
    $this->load->view('layout/footer');
  }

  public function inseregasto()
  {
    $this->load->view('layout/header');
    $this->load->model('model_base');
    $this->model_base->inseregasto();
    $this->load->view('layout/footer');
  }

  public function consultageral()
  {
    $this->load->view('layout/header');
    $this->load->model('model_base');
    $this->model_base->consultageral();
    $this->load->view('layout/footer');
  }
}
