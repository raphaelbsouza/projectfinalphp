<?php

include 'database/conexao.php';

$consulta = "SELECT * FROM tbfuncionarios";
$con = mysqli_query($conexao, $consulta) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));


?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2> Lista de Funcionários </h2>
    <table class="table">
        <tr>
            <td class="t1">ID</td>
            <td class="t2">Nome:</td>
            <td class="t1">CPF</td>
            <td class="t2">Endereço</td>
            <td class="t1">Telefone</td>
            <td class="t2">Email</td>
            <td class="t1">Gerenciar</td>
        </tr>    
            <?php while($dado = $con->fetch_array()){ ?>
        <tr>
            <td class="t1"><?php echo $dado["idFuncionario"] ?></td>
            <td class="t2"><?php echo $dado["nomeFuncionario"] ?></td>
            <td class="t1"><?php echo $dado["cpfFuncionario"] ?></td>
            <td class="t2"><?php echo $dado["endFuncionario"] ?></td>
            <td class="t1"><?php echo $dado["telFuncionario"] ?></td>
            <td class="t2"><?php echo $dado["emailFuncionario"] ?></td>
            <td class="t3">
            <i class='bx bx-edit-alt'></i> <a href="func_editar.php?idFuncionario=<?php echo $dado["idFuncionario"] ?>">Editar</a> |
            <i class='bx bx-x-circle'></i> <a href="func_excluir.php?idFuncionario=<?php echo $dado["idFuncionario"] ?>">Excluir</a>
            </td>
        </tr>
            <?php } ?>
    </table>
</body>
</html>