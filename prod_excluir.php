<?php
    session_start();
    include ('database/conexao.php');

    $cli_codigo = intval($_GET['idProduto']);

    $sql_code = "DELETE FROM tbprodutos WHERE idProduto = '$cli_codigo'";
    $con2 = mysqli_query($conexao, $sql_code) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));

    if ($sql_code == true) {
        $_SESSION['auth10'] = true;
    } else {
        $_SESSION['auth10'] = false;
    }
    header("Location: painel.php?p=ListarProdutos");
?>