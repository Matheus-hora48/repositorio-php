<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $num = 9;

  //Arredonda um numero pra cima
  echo ceil($num) . '<br/>';

  //Arredonda pra baixo
  echo floor($num) . '<br/>';

  //Arredonda com base na fração .0 e .4 => baixo , .5+ => cima 
  echo round($num) . '<br/>';

  //Gera um valor aleatorio de 0 ate randmax (Nos parentese coloca o inicio e o final)
  echo rand(10, 20) . '<br/>';
  echo getrandmax();

  //Retorna a raiz quadrada
  echo sqrt($num) . '<br/>';
  ?>
</body>

</html>