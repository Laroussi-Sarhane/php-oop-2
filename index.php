<?php

require_once __DIR__. '/cibo.php';
require_once __DIR__. '/giochi.php';
require_once __DIR__. '/prodotti.php';
require_once __DIR__. '/DB.php';



$prodotti = new Prodotti('giochi', 'cibo');
$cibo = new Cibo ('pallina','palla','plastica', '0.200');

$giochi = new Giochi('snack','cane','pesce');

var_dump($cibo );














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