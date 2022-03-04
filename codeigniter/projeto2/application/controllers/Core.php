<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Core extends CI_Controller
{


  public function index()
  {

    // Imagens dos Planetas
    $this->load->model('planetas');
    $dados['planetas'] = $this->planetas->imagensPlanetas();

    $this->load->view('template/cabecalho');
    $this->load->view('pagina_inicial', $dados);
    $this->load->view('template/rodape');
  }

  public function planeta($id)
  {

    $this->load->model('planetas');

    // Carrega os dados dos planetas para serem apresentados nas views.
    $dados['planetas'] = $this->planetas->planeta($id);

    $this->load->view('template/cabecalho');
    $this->load->view('pagina_planeta', $dados);
    $this->load->view('template/rodape');
  }
}
