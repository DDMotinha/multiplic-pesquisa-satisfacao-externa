<?php

//Váriaveis da conexão
    $servername = 'multiplicnet.com.br';
    $username = 'devpesquisa';
    $password = '@res4!*';
    $dbname = 'sql10357487';


    $conn = mysqli_connect($servername, $username, $password, $dbname);
//Erro se falhar
    
    if(mysqli_connect_error()):
        echo "Erro na conexão: " .mysqli_connect_error();
    endif;
?>