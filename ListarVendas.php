<?php

include 'database/conexao.php';

$consulta = "SELECT * FROM tbvendas";
$con = mysqli_query($conexao,$consulta) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Lista de Vendas</h2>
    <table class="table">
        <tr>
            <td class="t1">ID da Venda</td>
            <td class="t2">ID do Produto</td>
            <td class="t1">ID do Cliente</td>
            <td class="t2">ID do Funcionário</td>
            <td class="t1">Valor da Venda</td>
            <td class="t2">Gerenciar</td>
        </tr>    
            <?php while($dado = $con->fetch_array()){ 
                  $query_valorvendaproduto = "SELECT precoVendaProduto FROM tbprodutos WHERE idProduto='" . $dado['idProduto'] . "'";
                  $valorVenda = mysqli_query($conexao, $query_valorvendaproduto)->fetch_array();
                  if ($valorVenda != null) {
                    $valorVenda = $valorVenda['precoVendaProduto'];
                  }
                  $query_nome_produto = "SELECT descProduto FROM tbprodutos WHERE idProduto='" . $dado['idProduto'] . "'";
                  $nome_produto = mysqli_query($conexao, $query_nome_produto)->fetch_array();
                  if ($nome_produto != null) {
                    $nome_produto = $nome_produto['descProduto'];
                  }
                  $query_nome_client = "SELECT nomeCliente FROM tbclientes WHERE idCliente='" . $dado['idCliente'] . "'";
                  $nome_cliente = mysqli_query($conexao, $query_nome_client)->fetch_array();
                  if ($nome_cliente != null) {
                    $nome_cliente = $nome_cliente['nomeCliente'];
                  }
                  $query_nome_funcionario = "SELECT nomeFuncionario FROM tbfuncionarios WHERE idFuncionario='" . $dado['idFuncionario'] . "'";
                  $nome_funcionario = mysqli_query($conexao, $query_nome_funcionario)->fetch_array();
                  if ($nome_funcionario != null) {
                    $nome_funcionario = $nome_funcionario['nomeFuncionario'];
                  }
            ?>
            
        <tr>
            <td class="t1"><?php echo $dado["idVendas"] ?></td>
            <td class="t2"><?php echo $nome_produto ?></td>
            <td class="t1"><?php echo $nome_cliente ?></td>
            <td class="t2"><?php echo $nome_funcionario ?></td>  
            <td class="t1"><?php echo $valorVenda ?>
            <td class="t3">
                <i class='bx bx-edit-alt'></i> <a href="ven_editar.php?idVendas=<?php echo $dado["idVendas"] ?>">Editar</a> |
                <i class='bx bx-x-circle'></i> <a href="ven_excluir.php?idVendas=<?php echo $dado["idVendas"] ?>">Excluir</a>
            </td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>