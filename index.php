<?php

require_once __DIR__. '/Prodotti.php';
require_once __DIR__. '/Cibo.php';
require_once __DIR__. '/Giochi.php';
require_once __DIR__. '/DB.php';

$cibo= new Cibo("snack");
$giochi= new Giochi("0.200");
$prodotti= new Prodotti ('cane','plastica','')








?>

























<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">cibo</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($cibo as $item): ?>
    <tr>
      <th scope="row"><?php echo $item->nome?></th>
      <td><?php echo $item->tipologia?></td>
      
    </tr>
    <?php endforeach; ?>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
   
    </tr>
  </tbody>
</table>
</body>
</html>