<?php
    session_start();
    include ('database/conexao.php');

    $cli_codigo = intval($_GET['idVendas']);

    $sql_code = "DELETE FROM tbvendas WHERE idVendas = '$cli_codigo'";
    $con2 = mysqli_query($conexao, $sql_code) or die ("ERRO AO SE CONECTAR. ERRO:".mysqli_error($conexao));

    if ($sql_code == true) {
        $_SESSION['auth8'] = true;
    } else {
        $_SESSION['auth8'] = false;
    }
    header("Location: painel.php?p=ListarVendas");
?>