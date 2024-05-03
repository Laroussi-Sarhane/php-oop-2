<?php 

class Cibo extends Prodotti {

  public $tipologia;
  public $riferimento;

  public function __construct(string $_nome,string $_tipo,string $_materiale, string $tipologia, string $riferimento)
  {
    parent::__construct($_nome, $_tipo, $_materiale);

    // Assegnazione degli altri attributi specifici della classe Food
    $this->tipologia = $tipologia;
    $this->riferimento = $riferimento;
  }
  

}
?>