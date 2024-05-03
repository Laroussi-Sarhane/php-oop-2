<?php

require_once __DIR__. '/cibo.php';
require_once __DIR__. '/giochi.php';
require_once __DIR__. '/prodotti.php';
require_once __DIR__. '/DB.php';

foreach($prodotti as $type ){
  $cibo = new Cibo(
    $prodotti["tipologia"],
    $prodotti["riferimento"],
    $prodotti["tipo"],

  )
}
// foreach($prodotti as $other ){
//   $giochi = new Giochi(
//     $prodotti["nome"],
//     $prodotti["tipo"],
//     $prodotti["materiale"],
//     $prodotti["peso"],


//   )
}


















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