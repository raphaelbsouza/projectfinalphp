<?php
    class Produtos {
        protected $codigo;
        protected $descricao;
        protected $marca;
        protected $precocompra;
        protected $precovenda;
        protected $garantia;

        function __construct($c,$d,$m,$pc,$pv,$g) 
        {
         $this->setCodigo($c);
         $this->setDescricao($d);
         $this->setMarca($m);
         $this->setPrecocompra($pc);
         $this->setPrecoVenda($pv);
         $this->setGarantia($g);   
        }

        protected function getCodigo(){
            return $this->codigo;
        }
        protected function getDescricao(){
            return $this->descricao;
        }
        protected function getMarca(){
            return $this->marca;
        }
        protected function getPrecocompra(){
            return $this->precocompra;
        }
        protected function getPrecovenda(){
            return $this->precovenda;
        }
        protected function getGarantia(){
            return $this->garantia;
        }

        protected function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        protected function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        protected function setMarca($marca){
            $this->marca = $marca;
        }
        protected function setPrecocompra($precocompra){
            $this->precocompra = $precocompra;
        }
        protected function setPrecovenda($precovenda){
            $this->precovenda = $precovenda;
        }
        protected function setGarantia($garantia){
            $this->garantia = $garantia;
        }
    }
?>