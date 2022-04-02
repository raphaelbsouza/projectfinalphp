<?php

include 'database/conexao.php';

$consulta = "SELECT * FROM tbprodutos";
$con = mysqli_query($conexao, $consulta) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Lista de Produtos</h2>
    <table class="table">
        <tr>
            <td class="t1">ID do PRODUTO</td>
            <td class="t2">Descrição do Produto</td>
            <td class="t1">Marca do Produto</td>
            <td class="t2">Preço de Compra</td>
            <td class="t1">Preço de Venda</td>
            <td class="t2">Garantia</td>
            <td class="t1">Gerenciar</td>
        </tr>    
            <?php while($dado = $con->fetch_array()){ ?>
        <tr>
            <td class="t1"><?php echo $dado["idProduto"] ?></td>
            <td class="t2"><?php echo $dado["descProduto"] ?></td>
            <td class="t1"><?php echo $dado["marcaProduto"] ?></td>
            <td class="t2"><?php echo $dado["precoCompraProduto"] ?></td>
            <td class="t1"><?php echo $dado["precoVendaProduto"] ?></td>
            <td class="t2"><?php echo $dado["garantiaProduto"] ?></td>
            <td class="t3">
                <i class='bx bx-edit-alt'></i> <a href="prod_editar.php?idProduto=<?php echo $dado["idProduto"] ?>">Editar</a> |
                <i class='bx bx-x-circle'></i> <a href="prod_excluir.php?idProduto=<?php echo $dado["idProduto"] ?>">Excluir</a>
            </td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>