<?php

include 'database/conexao.php';

$consulta = "SELECT * FROM tbvendas";
$con = mysqli_query($conexao, $consulta) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));
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
            <td class="t1">ID do Produto</td>
            <td class="t2">ID do Cliente</td>
            <td class="t1">ID do Funcionários</td>
            <td class="t1">Gerenciar</td>
        </tr>    
            <?php while($dado = $con->fetch_array()){ ?>
        <tr>
            <td class="t1"><?php echo $dado["idProduto"] ?></td>
            <td class="t2"><?php echo $dado["idCliente"] ?></td>
            <td class="t1"><?php echo $dado["idFuncionario"] ?></td>
            <td class="t3">
                <i class='bx bx-edit-alt'></i> <a href="ven_editar.php?codigo=<?php echo $dado["idProduto"] ?>">Editar</a> |
                <i class='bx bx-x-circle'></i> <a href="ven_excluir.php?codigo=<?php echo $dado["idProduto"] ?>">Excluir</a>
            </td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>