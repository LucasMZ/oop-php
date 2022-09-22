<?php

class Produto{
  public $descricao;
  public $preco;
 
  public function getDescricao(){
      return $this->descricao;
}
  public function getPreco(){
    return $this->preco;
  }
  public function exibeTudo(){
    return "{$this->getDescricao()} e custa {$this->getPreco()}";
  }
}
$p1 = new Produto;
$p1->descricao = "É um produto muito especial";
$p1->preco = 10.00;

echo $p1->exibeTudo();
?>