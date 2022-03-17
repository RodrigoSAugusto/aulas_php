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
    $this->load->view('layout/footer');
  }


  /**

   * Get All Data from this method.

   *

   * @return Response

   */

  public function __construct()
  {

    parent::__construct();

    $this->load->database();
  }



  /**

   * Get All Data from this method.

   *

   * @return Response

   */

  public function fullcalendar()

  {

    $data['result'] = $this->db->get("gastos")->result();



    foreach ($data['result'] as $key => $value) {

      $data['data'][$key]['title'] = $value->nome;

      $data['data'][$key]['start'] = $value->tipo;

      $data['data'][$key]['end'] = $value->valor;

      $data['data'][$key]['end'] = $value->data;

      $data['data'][$key]['backgroundColor'] = "#00a65a";
    }


    $this->load->view('layout/header',);
    $this->load->view('content', $data);
    $this->load->view('layout/footer', $data);
  }
}
