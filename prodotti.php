<?php 

class Prodotti{

  public $nome;
  public $tipo;
  public $materiale;

  public function __construct(string $_nome,string $_tipo,string $_materiale)
  {
    $this->nome= $_nome;
    $this->tipo= $_tipo;
    $this->materiale= $_materiale;
  }

  public function getProductInfo(){
    return "$this->nome,$this->tipo,$this->materiale,";
  }

}
?>