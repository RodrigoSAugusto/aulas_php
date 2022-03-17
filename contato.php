<?php



class Gastos extends CI_Model
{

  public $dados;

  function __construct($dados)
  {
    //dados do post.
    $this->dados = $_POST;
    return $dados;
  }

  public function insereGastos($dados)
  {
    $this->db->insert('gastos', $dados);
  }
}
