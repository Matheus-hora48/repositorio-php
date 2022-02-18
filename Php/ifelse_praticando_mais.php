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

  $usuario = true;
  $compra = 225;
  $frete = 50;
  $desconto = false;

  if ($usuario == true && $compra >= 400) {
    $frete = 0;
    $desconto = true;
  } else if ($usuario && $compra >= 300) {
    $frete = 10;
    $desconto = true;
  } else if ($usuario && $compra >= 100) {
    $frete = 20;
    $desconto = true;
  }
  ?>
  <h1>Detalhe do pedido</h1>

  <p>Possui cartão da loja?
    <?php
    
    //operador ternario: 
    //<condição> ? true : false

    $teste = $usuario == true ? 'Sim' : 'Não';

    echo $teste
    /*
    if ($usuario == true) {
      echo 'Sim';
    } else {
      echo 'Não';
    }
    */


    ?>
  </p>
  <p>
    Valor da compra <?= $compra ?>
  </p>
  <p>Recebeu desconto do frete?
    <?php

    if ($desconto == true) {
      echo 'Sim';
    } else {
      echo 'Não';
    }

    ?>
  </p>
  <p>
    Valor do frete <?= $desconto ?>
  </p>
</body>

</html>