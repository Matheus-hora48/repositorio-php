<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  //in_array() - serve para verificar se tem um elemento na array true ou false

  $lista_fruta = array(1 => 'banana', 2 => 'maça', 3 => 'morango', 4 => 'uva');

  echo '<pre>';
  print_r($lista_fruta);
  echo '</pre>';

  //retorna o indece do respectivo valor se nao achar ele retorna null
  $existe = array_search('maça', $lista_fruta);

  /*
  #$existe = in_array('uva', $lista_fruta);
  //true  = 1
  //false = vazio
  if($existe =! null) {
    echo "Ta no indice $existe";
  } else {
    echo 'Não tem na array:';
  }
  */
  $lista_coisa = [
    'frutas'  => $lista_fruta,
    'pessoas' => ['João','Maria']
  ];

  echo '<pre>';
  print_r($lista_coisa);
  echo '</pre>';

  echo in_array('uva', $lista_coisa['frutas'])

  ?>
</body>

</html>