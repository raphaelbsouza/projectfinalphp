<?php
session_start();
    
include_once ('database/conexao.php');
 
$nomeCliente = $_POST['nomeCliente'];
$cpfCliente = $_POST['cpfCliente'];
$endCliente = $_POST['endCliente'];
$telCliente = $_POST['telCliente'];
$emailCliente = $_POST['emailCliente'];

$result_msg_cliente = "INSERT INTO tbclientes (nomeCliente,cpfCliente,endCliente,telCliente,emailCliente) VALUES ('" . $nomeCliente ."', '" . $cpfCliente . "', '" . $endCliente . "', '" . $telCliente . "', '" . $emailCliente . "')";
$result_msg_cliente = mysqli_query($conexao, $result_msg_cliente) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));

if ($result_msg_cliente == true) {
    $_SESSION['auth'] = true;
    header("Location: painel.php?p=AddClientes");
} else {
    $_SESSION['auth'] = false;
    header("Location: painel.php?p=AddClientes");
}
?>