<?php
    session_start();
    include 'database/conexao.php';
    
    #VERIFICA SE O USUARIO OU SENHA ESTÃO VAZIOS, E REDIRECIONA PARA A TELA DE ACESSO CASO ESTEJA
    if( empty($_POST['usuario']) || empty($_POST['senha']) ){
        header('Location: index.php');
        echo 'login ou usuário invalidos.';
        exit();
    }

    #CONSTROI O NOSSO COMANDO SQL DE CONSULTA
    $usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
    $senha   = mysqli_real_escape_string($conexao,$_POST['senha']);
    $query = 'SELECT usuario,senha,nivel from tbusuario where usuario = "'.$usuario.'" and senha = md5("'.$senha.'")';
    
    #REALIZA A CONSULTA NO BANCO
    $resultado = mysqli_query($conexao,$query);
    #RETORNA O NÚMERO DE LINHAS DA NOSSA CONSULTA
    $linha = mysqli_num_rows($resultado);


    $dado = $resultado->fetch_array();


    #CASO A CONSULTA RETORNE UM VALOR, PERMITE O ACESSO. CASO NÃO, REDIRECIONA PARA A TELA DE ACESSO
    
    
    if ($linha == 1) {
        $_SESSION['usuario'] = [$dado['usuario'],$dado['nivel']];
        header('Location: painel.php?p=inicial');
        exit();
    } else{
        $_SESSION['nao_autenticado'] = true;//inicia uma nova sessão caso o usuário tente um acesso sem sucesso
        header('Location: index.php');
        exit();
    }
?>