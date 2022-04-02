<?php
session_start();
    
include_once ('database/conexao.php');
 
$nomeFuncionario = $_POST['nomeFuncionario'];
$cpfFuncionario = $_POST['cpfFuncionario'];
$endFuncionario = $_POST['endFuncionario'];
$telFuncionario = $_POST['telFuncionario'];
$emailFuncionario = $_POST['emailFuncionario'];

$result_msg_cliente = "INSERT INTO tbfuncionarios (nomeFuncionario,cpfFuncionario,endFuncionario,telFuncionario,emailFuncionario) VALUES ('" . $nomeFuncionario ."', '" . $cpfFuncionario . "', '" . $endFuncionario . "', '" . $telFuncionario . "', '" . $emailFuncionario . "')";
$result_msg_cliente = mysqli_query($conexao, $result_msg_cliente) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));

if ($result_msg_cliente == true) {
    $_SESSION['auth2'] = true;
    header("Location: painel.php?p=AddFuncionarios");
} else {
    $_SESSION['auth2'] = false;
    header("Location: painel.php?p=AddFuncionarios");
}
?>