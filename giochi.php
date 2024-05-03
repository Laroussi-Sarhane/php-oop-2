<?php 

class Giochi extends Prodotti{

  public $peso;
 

  public function __construct(string $_nome,string $_tipo,string $_materiale, string $_peso)
  {
     parent::__construct($_nome, $_tipo, $_materiale);
    
     $this->peso= $_peso;
    

  }

}
?>