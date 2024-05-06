<?php

require_once __DIR__. '/cibo.php';
require_once __DIR__. '/giochi.php';
require_once __DIR__. '/DB.php';
require_once __DIR__. '/prodotti.php';

$nuovoCibo = [];
$nuoviGiochi = [];



foreach ($prodotti as $item => $prodottiItem) {
  foreach ($prodottiItem as $prodotti) {
      if ($item === "cibo") {
         
          $cibo = new Cibo(
              $prodotti["nome"],
              $prodotti["tipo"],
              $prodotti["materiale"],
          );

          $nuovoCibo[] = $cibo;
      } elseif ($category === "toys") {
          $giochi = new Giochi(
              $product["tipo"],
           
          );

        
          $formattedToys[] = $toy;
      }
  }
}
?>

















?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>