<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Planetas extends CI_Model
{

  private $dados_planetas;


  // Construtor
  function __construct()
  {

    parent::__construct();

    // dados_planetas

    $this->dados_planetas = [
      // Planeta 0
      [
        'nome_planeta' => 'Azulmar',
        'descrição'    => 'Um lindo paraiso cheio de praias e mares tranquilos.',
        'imagem'       => 'azulmar.jpg'
      ],
      // Planeta 1
      [
        'nome_planeta' => 'Betelgelse_5',
        'descrição'    => 'Um lindo paraiso cheio de Florestas com com fauna e flora repleta de cores e vida.',
        'imagem'       => 'Betelgelse_5.jpg'
      ],
      //Planeta 2  
      [
        'nome_planeta' => 'Mars_Colon',
        'descrição'    => 'Um Maravilhoso planeta desetico com lindas cavernas e grutas para serem exploradas.',
        'imagem'       => 'Mars_Colon.jpg'
      ],
      // Planeta 3
      [
        'nome_planeta' => 'Smurfius_3',
        'descrição'    => 'Um lindo paraiso de mares tranquilos, com lisdas geleiras e animais marinhos gigantescos.',
        'imagem'       => 'Smurfius_3.jpg'
      ],
      // Planeta 4
      [
        'nome_planeta' => 'Tandera',
        'descrição'    => 'Um planeta selvagem e misterioso, onde vive uma raça que aparenta ser uma mistura de Homens e felinos.',
        'imagem'       => 'Tandera.jpg'
      ],

    ];
  }

  //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  public function imagensPlanetas()
  {
    // retornas a imagens dos planetas
    $imagens = [];
    foreach ($this->dados_planetas as $planeta) {
      array_push($imagens, $planeta['imagem']);
    }
    return $imagens;
  }

  public function planeta($id)
  {

    // Retorna o id do planeta escolhido.
    return $this->dados_planetas[$id];
  }
}
