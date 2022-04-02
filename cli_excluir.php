<?php
    session_start();
    include ('database/conexao.php');

    $nomeCliente = filter_input(INPUT_POST, 'nomeCliente', FILTER_SANITIZE_STRING);
    $cpfCliente = filter_input(INPUT_POST, 'cpfCliente', FILTER_SANITIZE_STRING);
    $endCliente = filter_input(INPUT_POST, 'endCliente', FILTER_SANITIZE_STRING);
    $telCliente = filter_input(INPUT_POST, 'telCliente', FILTER_SANITIZE_STRING);
    $emailCliente = filter_input(INPUT_POST, 'emailCliente', FILTER_SANITIZE_EMAIL);

?>