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
    <?php
    $erro = false;
           // Verifica se o POST tem algum valor
        if ( !isset( $_POST ) || empty( $_POST ) ) {
            $erro = 'Nada foi postado.';
        }

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

    // Verifica se $idade realmente existe e se é um número. 
    // Também verifica se não existe nenhum erro anterior
    if ( ( ! isset( $idade) || ! is_numeric( $idade ) ) && !$erro ) {
        $erro = 'A idade deve ser um valor número.';
    }
    
    // Verifica se $email realmente existe e se é um email. 
    // Também verifica se não existe nenhum erro anterior
    if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
        $erro = 'Envie um email válido.';
    }
    ?>


</body>
</html>