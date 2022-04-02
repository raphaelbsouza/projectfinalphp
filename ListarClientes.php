<?php
    include 'database/conexao.php';
    $consulta = "SELECT * FROM tbclientes";
    $con = mysqli_query($conexao, $consulta) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));
?>

<!DOCTYPE html>
<html lang="pt_br">
<link rel="stylesheet" href="css/style.css">
<body>
    <h2> Lista de Clientes </h2>
    <table class="table">
        <tr>
            <td class="t1">ID</td>
            <td class="t2">Nome:</td>
            <td class="t1">CPF</td>
            <td class="t2">Endereço</td>
            <td class="t1" >Telefone</td>
            <td class="t2">Email</td>
            <td class="t1">Gerenciar</td>
        </tr>    
            <?php while($dado = $con->fetch_array()){ ?>
        <tr>
            <td class="t1"><?php echo $dado["idcliente"] ?></td>
            <td class="t2"><?php echo $dado["nomeCliente"] ?></td>
            <td class="t1"><?php echo $dado["cpfCliente"] ?></td>
            <td class="t2"><?php echo $dado["endCliente"] ?></td>
            <td class="t1"><?php echo $dado["telCliente"] ?></td>
            <td class="t2"><?php echo $dado["emailCliente"] ?></td>
            <td class="t3">
                <i class='bx bx-edit-alt'></i> <a href="cli_editar.php?idcliente=<?php echo $dado["idcliente"] ?>">Editar</a> |
                <i class='bx bx-x-circle'></i> <a href="cli_excluir.php?idcliente=<?php echo $dado["idcliente"] ?>">Excluir</a>
            </td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>