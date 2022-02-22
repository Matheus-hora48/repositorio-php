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

  /*
  //is_array() -> verifica se é um array ou não
  $array = ['string', 'teste'];
  $retorno = is_array($array);

  if ($retorno) {
    echo 'É um array';
  } else {
    echo 'Não é uma array';
  }
  */


  /*
  //array_keys() -> pega todas as chaves da array e faça outra array com ela
  $array = 'a'[1 => , 7 => 'b', 18 => 'c'];
  echo '<pre>';
  print_r($array);
  echo '</pre>';

  $chave_array = array_keys($array);
  echo '<pre>';
  print_r($chave_array);
  echo '</pre>';
  */

  /*
  //sort() -> serve para ordenar o array de forma alfabetica (Não preserva os indeces)
  $array = ['string', 'teste2', 'teste1', 'teste3', 'teste4', 'teste5',];
  echo '<pre>';
  print_r($array);
  echo '</pre>';

  sort($array); //retorna true ou false
  echo '<pre>';
  print_r($array);
  echo '</pre>';
  */

  /*
  //asort() -> vai ordenar o array mas preserva os indeces
  $array = ['string', 'teste2', 'teste1', 'teste3', 'teste4', 'teste5',];
  echo '<pre>';
  print_r($array);
  echo '</pre>';

  asort($array); //retorna true ou false
  echo '<pre>';
  print_r($array);
  echo '</pre>';
  */

  /*
  //count() -> retorna quantos elementos tem em uma array
  $array = ['string', 'teste2', 'teste1', 'teste3', 'teste4', 'teste5',];
  echo '<pre>';
  print_r($array);
  echo count($array);
  echo '</pre>';
  */

  /*
  //array_merge() -> serve para fundir varias array
  $array1 = ['Teste1', 'Teste2'];
  $array2 = ['Teste2'];
  $array3 = ['Teste3'];

  $novo_array = array_merge($array1, $array2, $array3,);
  echo '<pre>';
  print_r($novo_array);
  echo '</pre>';
  */

  /*
  //explode() -> primeiro tem que passar o caracter limitante de cada um depois a string que quer quebrar e vai retornar uma array
  $string = '26/04/2022';
  $array_retorno = explode('/', $string);
  echo '<pre>';
  print_r($array_retorno);
  echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
  echo '</pre>';
  */

  /*
  //implode('o caractere ', a var) -> serve para transformar um array em string 
  $array = ['a','b','c','x','y',];
  echo implode(',',$array);
  */

  ?>
</body>

</html>