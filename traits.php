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
        <div class="lead">
            <h3>TRAITS</h3>
        </div>
        <div >
            <p>
                São um grupo de métodos que podem ser inseridos dentro de classes. Foram adicionados à linguagem na sua versão 5.4
                para aumentar a reutilização de código.
            </p>
        </div>
        <div>
            <p>
                Os traits são definidos com a expressão trait, seguido pelo nome e por um bloco de código. 
                As regras para dar nome as traits são as mesmas que usamos nas classes.
            </p>
        </div>
        
        <?php
        
        trait MinhaHabilidade
        {
            public function falar($mensagem){
                echo "Eu digo: $mensagem";
            }

            public function saltar($metros){
                echo "Eu salto $metros metros.";
            }
        }

        ?>
        <div>
            <p>
                As classes que necessitam de usar estes mátodos do trait, apenas terão que ter o seguinte.
            </p>
        </div>
        <div>
            <?php 

                class Humano
                {
                    use MinhaHabilidade;
                }

                $h = new Humano;
                $h->falar('Olá Mundo!');
                echo '<br>';
                $h->saltar(3);
            
            ?>
        </div>
    </div>
</body>
</html>