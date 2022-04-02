<?php
    $server = 'localhost';
    $user = 'root';
    $senha = '';
    $banco = 'dbinfoservices';

    $conexao = mysqli_connect($server,$user,$senha,$banco) or die('Erro ao conectar Servidor. Erro:'.mysqli_error($conexao));
?>