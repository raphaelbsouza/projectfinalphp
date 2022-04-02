<?php
    class Pessoa
    {
        protected $nome;
        protected $cpf;
        protected $endereco;
        protected $Telefone;
        protected $email;

        function __construct($n,$c,$e,$t,$em)
        {
            $this->setNome($n);
            $this->setCpf($c);
            $this->setEndereco($e);
            $this->setTelefone($t);
            $this->setEmail($em);
        }

        protected function getNome(){
            return $this->nome;
        }
        protected function getCpf(){
            return $this->cpf;
        }
        protected function getEndereco(){
            return $this->endereco;
        }
        protected function getTelefone(){
            return $this->endereco;
        }
        protected function getEmail(){
            return $this->endereco;
        }

        protected function setNome($nome){
            $this->nome = $nome;
        }
        protected function setCpf($cpf){
            $this->cpf = $cpf;
        }
        protected function setEndereco($end){
            $this->endereco = $end;
        }
        protected function setTelefone($tel){
            $this->endereco = $tel;
        }
        protected function setEmail($email){
            $this->endereco = $email;
        }
    }
?>