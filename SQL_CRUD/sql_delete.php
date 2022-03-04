<?php
    
    include 'sql_connect.php';

    $id=$_GET['delDados'];

    echo $_GET['delDados'];

  
    $sql = "DELETE FROM cadastro WHERE id='$id'";

    $delete = mysqli_query($link, $sql);

    mysqli_close($link);
    
    ?>


