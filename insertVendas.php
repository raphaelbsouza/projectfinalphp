<?php
session_start();
    
include_once ('database/conexao.php');

$idProduto = $_POST['idProduto'];
$idCliente = $_POST['idCliente'];
$idFuncionario = $_POST['idFuncionario'];

$query_nome_produto = "SELECT descProduto FROM tbprodutos WHERE idProduto='" . $idProduto . "'";
$nome_produto = mysqli_query($conexao, $query_nome_produto)->fetch_array();
$query_nome_client = "SELECT nomeCliente FROM tbclientes WHERE idCliente='" . $idCliente . "'";
$nome_cliente = mysqli_query($conexao, $query_nome_client)->fetch_array();
$query_nome_funcionario = "SELECT nomeFuncionario FROM tbfuncionarios WHERE idFuncionario='" . $idFuncionario . "'";
$nome_funcionario = mysqli_query($conexao, $query_nome_funcionario)->fetch_array();

if ($nome_produto == null) {
    $_SESSION['auth4'] = false;
    $_SESSION['msg'] = "Produto não existe";
    header("Location: painel.php?p=AddVendas");
}
if ($nome_cliente == null) {
    $_SESSION['auth4'] = false;
    $_SESSION['msg'] = "Cliente não existe";
    header("Location: painel.php?p=AddVendas");
}
if ($nome_funcionario == null) {
    $_SESSION['auth4'] = false;
    $_SESSION['msg'] = "Funcionário não existe";
    header("Location: painel.php?p=AddVendas");
}

if ($nome_produto != null && $nome_cliente != null && $nome_funcionario != null) {
$result_msg_cliente = "INSERT INTO tbvendas (idProduto, idCliente, idFuncionario) VALUES ('" . $idProduto ."', '" . $idCliente . "', '" . $idFuncionario . "')";
$result_msg_cliente = mysqli_query($conexao, $result_msg_cliente) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));
}

if ($result_msg_cliente == true) {
    $_SESSION['auth4'] = true;
    header("Location: painel.php?p=AddVendas");
} else {
    $_SESSION['auth4'] = false;
    header("Location: painel.php?p=AddVendas");
}
?>