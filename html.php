<?php
    class html 
    {
        private $usuariologado = null;
        private $nivel = 0;

        public function __construct($usuario = null, $nivel = null) {
            if ($usuario && $nivel) {
                $this -> nivel = $nivel;
                $this -> usuariologado = $usuario;
            } 
        }

        public function buttonaccess(){ 
            if ($this -> nivel == 1){
            return '<div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Funcionários
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="./painel.php?p=AddFuncionarios">Adicionar</a>
            </div> </div>&nbsp';
            }
        }

        public function optionaccess(){ 
            if ($this -> nivel == 1){
            return '<a class="dropdown-item" href="./painel.php?p=ListarFuncionarios">Funcionários</a> ';
            }
        }

        public function head(){
            echo 
            '<!DOCTYPE html>
            <html lang="pt_br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/signin.css">
                <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
                <link rel="shortcut icon" href="imagem/computericon.png" />
                <title>INFOServices</title>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
                </head>';
        }

        public function topo(){
           echo '<link rel="stylesheet" href="css/style.css">';
           echo '
           <header>
            <div class="div1">
            </div>
            <div class="div2">
            <img src="imagem/computericon.png" alt="Computer Icon">&nbsp
            <a class="logcoff" href="painel.php?p=inicial"><h1>INFOServices</h1></a>
            </div>
            <div class="div3">
            <box-icon name="exit"></box-icon>&nbsp&nbsp
            <a href="logout.php">Sair</a>
            </div>
           </header>
           <section>
            <div class="navbar">
                <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Clientes
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="./painel.php?p=AddClientes">Adicionar</a>
                </div>
                </div>&nbsp
                '.$this -> buttonaccess().'
                <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produtos
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="./painel.php?p=AddProdutos">Adicionar</a>
                </div>
                </div>&nbsp
                <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Vendas
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="./painel.php?p=AddVendas">Adicionar</a>
                <a class="dropdown-item" href="./painel.php?p=ListarVendas">Consultar</a>
                </div>
                </div>&nbsp
                <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Listar
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                '.$this -> optionaccess().'  
                <a class="dropdown-item" href="./painel.php?p=ListarClientes">Clientes</a> 
                <a class="dropdown-item" href="./painel.php?p=ListarProdutos">Produtos</a> 
                </div>
                </div>&nbsp
            </div>
            </section>
            ';
        }

        public function nomeusuario(){
            if ($this -> usuariologado != null) {
                return $this -> usuariologado;
            }
        }

        public function item1(){
            echo '
            <marquee direction="right" width="100%" height="30px" style="font-size: 15px; font-style:Verdana;background-color: rgb(212, 212, 212);">Seja Bem vindo '.$this -> nomeusuario().', e Faça bom Aproveito.</marquee>
            ';
        }

        public function item2(){
            echo '<link rel="stylesheet" href="css/signin.css">';
            echo '<link rel="stylesheet" href="css/style.css">';
            $valor = @$_GET['p'];
            
                        
            if ($valor == 'AddClientes') { require_once 'funcs/clientes/AddClientes.php';}
            elseif ($valor == 'DelClientes') { require_once 'funcs/clientes/DelClientes.php';}
            elseif ($valor == 'ConClientes') { require_once 'funcs/clientes/ConClientes.php';}
        
            elseif ($valor == 'AddProdutos') { require_once 'funcs/produtos/AddProdutos.php';}
            elseif ($valor == 'DelProdutos') { require_once 'funcs/produtos/DelProdutos.php';}
            elseif ($valor == 'ConProdutos') { require_once 'funcs/produtos/ConProdutos.php';}

            elseif ($valor == 'AddFuncionarios') { require_once 'funcs/funcionarios/AddFuncionarios.php';}
            elseif ($valor == 'DelFuncionarios') { require_once 'funcs/funcionarios/DelFuncionarios.php';}
            elseif ($valor == 'ConFuncionarios') { require_once 'funcs/funcionarios/ConFuncionarios.php';}

            elseif ($valor == 'ListarClientes') { require_once 'ListarClientes.php';}
            elseif ($valor == 'ListarFuncionarios') { require_once 'ListarFuncionarios.php';}
            elseif ($valor == 'ListarProdutos') { require_once 'ListarProdutos.php';}
            elseif ($valor == 'ListarVendas') { require_once 'ListarVendas.php';}

            elseif ($valor == 'ConVendas') { require_once 'funcs/vendas/ConVendas.php';}
            elseif ($valor == 'AddVendas') { require_once 'funcs/vendas/AddVendas.php';}

            elseif ($valor == 'EditarFuncionarios') { require_once 'funcs/funcionarios/EditarFuncs.php';} 
            elseif ($valor == 'inicial') { require_once 'inicial.php';}
        }  

        public function footer(){
            echo '<footer>
                 Copyright @ INFOServices 2021
                 </footer>';
        }

    }
?>