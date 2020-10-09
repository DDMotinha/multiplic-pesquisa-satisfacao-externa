<?php

require_once 'conn.inc.php';

    if(isset($_POST['submit'])):
    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $tell = mysqli_escape_string($conn, $_POST['tell']);
    $resp_a = mysqli_escape_string($conn, $_POST['resp_a']);
    $resp_b = mysqli_escape_string($conn, $_POST['resp_b']);
    $resp_c = mysqli_escape_string($conn, $_POST['resp_c']);
    $resp_d = mysqli_escape_string($conn, $_POST['resp_d']);
    $resp_e = mysqli_escape_string($conn, $_POST['resp_e']);
    
    $sql = "INSERT INTO resultDB (nome, tell, resp_a, resp_b, resp_c, resp_d, resp_e) VALUES ('$nome', '$tell', '$resp_a', '$resp_b', '$resp_c', '$resp_d', '$resp_e')";
    
    if(mysqli_query($conn, $sql)):
        header('Location: final.php?enviado');
    endif;
endif;
?>