<?php
    require_once 'Pessoa.php';

    class Funcionario extends Pessoa{
        protected $senha;
        protected $level;

        function __construct($n,$c,$e,$t,$em,$senha,$level)
        {
            $this->setNome($n);
            $this->setCpf($c);
            $this->setEndereco($e);
            $this->setTelefone($t);
            $this->setEmail($em);
            $this->setSenha($senha);
            $this->setLevel($level);
        }

        protected function getSenha(){
            return $this->Senha;
        }
        protected function getLevel(){
            return $this->level;
        }

        protected function setSenha($senha){
            $this->senha = $senha;
        }
        protected function setLevel($level){
            $this->level = $level;
        }
    }
?>