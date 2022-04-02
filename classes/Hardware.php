<?php
  require_once 'Produtos.php';

  class Hardware extends Produtos
  {
    protected $estoque;

    function __construct($c,$d,$m,$pc,$pv,$g,$e)
    {
        $this->setCodigo($c);
         $this->setDescricao($d);
         $this->setMarca($m);
         $this->setPrecocompra($pc);
         $this->setPrecoVenda($pv);
         $this->setGarantia($g);   
         $this->setEstoque($e);
    }

    protected function getEstoque(){
        return $this->estoque;
    }

    protected function setEstoque($estoque){
        $this->estoque = $estoque;
    }
  }  
?>