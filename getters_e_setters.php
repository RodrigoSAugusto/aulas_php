<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
    <h3>GETTERS E SETTERS</h3>

    <p>Definir propriedades de classes como sendo publicas pode gerar muitos problemas, pricipalmente de segurança, por isso 
        é aconselhavel setar o maximo de possível de propriedades como privada, e então fazer o uso de métodos específicos para 
        fazer acesso a essas propriedades. Estes métodos permitirão que a integridade das propriedades sejam mantidas.</p>

    <?php 
    
        class Passaro
        {
            private $peso = 75;

            public function setPeso($valor){
                if(is_numeric($valor)){ // valida se o $valor é numérico.
                    $this->peso = $valor;
                }
            }

            public function getPeso(){
                return $this->peso;
            }
        }
        
        $pardal = new Passaro();
        $pardal->setpeso('urubu');  // como o valor não é numérico o validação não o considera.
        echo $pardal->getpeso();


        class Tempo
        {
            private $segundos;

            public function setSegundos($valor){
                if(!is_numeric($valor) || $valor < 0){
                    $this->segundos = 0;
                } else {
                    $this->segundos = $valor;
                }
            }

            function getMinutos(){
                return $this->segundos / 60;
            }

            function setMinutos(){
                if($valor == 0){
                    $this->segundos = 0;
                } else {
                    $this->segundos = $valor * 60;
                }
            }
        }
        echo '<br>';
        $crazy_clock = new Tempo();
        $crazy_clock->setSegundos(96);
        echo $crazy_clock->getMinutos();


    ?>

    
</body>
</html>