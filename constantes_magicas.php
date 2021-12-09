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
    <div class="container">
        <h3>CONSTANTES MÁGICAS</h3>
        <div class="container">
            <p>
                As constantes mágicas são 8 e são designdas assim porque o seu valor varia automaticamente dependendo de onde estão a ser usadas.        
            </p>
            <p>
                Veja os exemplos abaixo:
            </p>
        </div>
        <div class="container">
            <p>echo __LINE__ . ; # indica o número da linha de código no script.</p><br/>
            <?php echo __LINE__ . '<br>'; # indica o número da linha de código no script. ?><br/>
        </div>
        <div class="container">
            <p>echo __FILE__ . ; # identifica o caminho completo do script.</p><br/>
            <?php echo __FILE__ . '<br>'; # identifica o caminho completo do script. ?><br/>
        </div>
        <div class="container">
            <p>echo __DIR__ .; # identifica a pasta onde o script está alojado.</p><br/>
            <?php echo __DIR__ . '<br>'; # identifica a pasta onde o script está alojado. ?><br/>
        </div>
        <div class="container">
            <p>echo __FUNCTION__ . ; # indica o nome da função.</p><br/>
        </div>
        <div class="container">
            <p>echo __CLASS__ . ;  #identifica o nemo da classe.</p><br/>
        </div>
        <div class="container">
            <p>echo __METHOD__ . ;  # identifica o nome do método.</p><br/>
        </div>
        <div class="container">
            <p>__TRAIT__ esta relacionado com um mecanismo de reutilização de código.</p><br/>
        </div>
        <div class="container">
            <p>echo __NAMESPACE__;  # indica o nome do namespace atual.</p><br/>
        </div>
    </div>
    <div class="container">
        <?php 
            teste();
            function teste(){
                $a = true;
                echo __FUNCTION__ . '<br>'; # indica o nome da função.
            }

            class MinhaClasse
            {
                function identificar(){
                    echo __CLASS__ . '<br>';  #identifica o nemo da classe.
                    echo __METHOD__ . '<br>';  # identifica o nome do método.
                }
            }
            
            $a = new MinhaClasse();
            $a->identificar();

            # __TRAIT__ esta relacionado com um mecanismo de reutilização de código.

            echo __NAMESPACE__;  # indica o nome do namespace atual.

        ?>
    </div>




    
</body>
</html>