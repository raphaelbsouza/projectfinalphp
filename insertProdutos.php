<?php
session_start();
    
include_once ('database/conexao.php');
 
$descProduto = $_POST['descProduto'];
$marcaProduto = $_POST['marcaProduto'];
$precoCompraProduto = $_POST['precoCompraProduto'];
$precoVendaProduto = $_POST['precoVendaProduto'];
$garantiaProduto = $_POST['garantiaProduto'];

$result_msg_cliente = "INSERT INTO tbprodutos (descProduto,marcaProduto,precoCompraProduto,precoVendaProduto,garantiaProduto) VALUES ('" . $descProduto ."', '" . $marcaProduto . "', '" . $precoCompraProduto . "', '" . $precoVendaProduto . "', '" . $garantiaProduto . "')";
$result_msg_cliente = mysqli_query($conexao, $result_msg_cliente) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));

if ($result_msg_cliente == true) {
    $_SESSION['auth3'] = true;
    header("Location: painel.php?p=AddProdutos");
} else {
    $_SESSION['auth3'] = false;
    header("Location: painel.php?p=AddProdutos");
}
?>