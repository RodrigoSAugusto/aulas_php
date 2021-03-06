<?php

    // Cria as variáveis dinamicamente
    foreach ( $_POST as $chave => $valor ) {
        // Remove todas as tags HTML
        // Remove os espaços em branco do valor
        $$chave = trim( strip_tags( $valor ) );
        
        // Verifica se tem algum valor nulo
        if ( empty ( $valor ) ) {
            $erro = 'Existem campos em branco.';
        }
    }

    // Verifica se $nome realmente existe e se tem mais de 2 caracteres. 
    // Também verifica se não existe nenhum erro anterior
    if ( ( ! isset( $nome) || strlen($nome) <= 3 )) {
        $nome = 'Nome não foi preenchido ou esta incompleto.';
        $id1 = false;
    } else {
        $id1 = true;
    }

    // Verifica se $idade realmente existe e se é um número. 
    // Também verifica se não existe nenhum erro anterior
    if ( ( ! isset( $idade) ) || ! filter_var($idade, FILTER_VALIDATE_INT) || empty($idade)) {
        $idade = 'A idade deve ser um valor númerico.';
        $id2 = false;
    } else {
        $id2 = true;
    }
    
    // Verifica se $email realmente existe e se é um email. 
    // Também verifica se não existe nenhum erro anterior
    if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) )) {
        $email = 'Envie um email válido.';
        $id3 = false;
    } else {
        $id3 = true;
    }

    if ( ( ! isset( $sexo) || empty($sexo) )) {
        $sexo = 'O sexo nao foi definido.';
        $id4 = false;
    } else {
        $id4 = true;
    }

    if ( ( ! isset( $obs) || empty($obs) )) {
        $obs = 'A observação deve conter mais de 10 caracteres.';
        $id5 = false;
    }else {
        $id5 = true;   
    }

    // Gera um id unico para cada cadastro valido.

    if ( $id1 == true && $id2 == true && $id3 == true && $id4 == true && $id5 == true){
        $id = uniqid();
        $cabecalho = "Cadastro N° {$id}";
    } else {
        $cabecalho = "Cadastro não válido, favor rever as informações fornecidas.";
    }




    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Cadastro</title>

    
</head>
<body>
    <br/>
    <h3> Ficha de cadastro preenchida </h3>
    <br/>
    
    <div class="container">
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th colspan='2' center><?php echo $cabecalho ?></th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='2'><?php echo 'Nome: ' . $nome; ?></td>
                    
                </tr>
                <tr>
                    <td rowspan=''><?php echo 'Idade: ' . $idade; ?></td>
                    <td rowspan=''><?php echo 'E-mail: ' . $email; ?></td>
                </tr>
                <tr>
                    <td colspan='2'><?php echo 'Sexo: ' . $sexo; ?></td>
                    
                </tr>
                <tr>
                    <td colspan='2' style='text-align: center; vertical-align: middle;'><?php echo 'Observações: ' . $obs; ?></td>
                    
                </tr>
            </tbody>   
        </table>
    </div>


    <?php 
    
        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        //Load Composer's autoloader
        require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'rodrigosilvaugusto@gmail.com';         //SMTP username
            $mail->Password   = 'irclmzwikbossqrp';                            //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            #$mail->setFrom('rodrigosilvaugusto@gmail.com', 'Rodrigo');
            #$mail->addAddress('rodrigo.silva@medicalway.com.br', 'Rodrigo');     //Add a recipient
            #$mail->addAddress('bruno@medicalway.com.br', 'Bruno');
            // $mail->addAddress('everton@medicalway.com.br', 'Everton');
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Here is the subject';
            $mail->Body    = "<!DOCTYPE html>
                                <html lang='en'>
                                <head>
                                    <meta charset='UTF-8'>
                                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                                
                                    
                                </head>
                                <body>

                                <p> 
                                    Formulário preenchido corretamente, sem as mensagens de validação:
                                </p>

                                    <table border='1'>
                                        <thead>
                                            <tr>
                                                <th colspan='2' center> $cabecalho</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan='2'>Nome: $nome</td>
                                                
                                            </tr>
                                            <tr>
                                                <td rowspan=''>Idade: $idade</td>
                                                <td rowspan=''>E-mail: $email</td>
                                            </tr>
                                            <tr>
                                                <td colspan='2'>Sexo: $sexo</td>
                                                
                                            </tr>
                                            <tr>
                                                <td colspan='2' style='text-align: center; vertical-align: middle;'>Observações: $obs</td>
                                                
                                            </tr>
                                        </tbody>   
                                    </table>
                                </body>";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            print_r($mail->Body);
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
                

    ?>


</body>
</html>