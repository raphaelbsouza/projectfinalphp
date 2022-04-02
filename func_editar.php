<?php
    session_start();
    include ('database/conexao.php');

    $cli_codigo = intval($_GET['idFuncionario']);

    $sql_code = "DELETE FROM tbfuncionarios WHERE idFuncionario = '$cli_codigo'";
    $con2 = mysqli_query($conexao, $sql_code) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));

    if ($sql_code == true) {
        $_SESSION['auth9'] = true;
    } else {
        $_SESSION['auth9'] = false;
    }
    header("Location: painel.php?p=ListarFuncionarios");
?>