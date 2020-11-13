<?php

//Váriaveis da conexão
    $servername = '';
    $username = '';
    $password = '';
    $dbname = '';


    $conn = mysqli_connect($servername, $username, $password, $dbname);
//Erro se falhar
    
    if(mysqli_connect_error()):
        echo "Erro na conexão: " .mysqli_connect_error();
    endif;
?>
