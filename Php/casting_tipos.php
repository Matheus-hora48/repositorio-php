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
  
  //Tipos de variaveis -> int, float, string, bool

  //gettype() -> serve para retornar o tipo da variavel


  //int     -> float, string
  //float   -> int, string
  //boolean -> int, string -> false = 0 ou vazio / true = 1
  //string  -> int, float, boolean -> de um numero para string ele retorna um numero e se nao for um numero ele retorna 0, e sendo um boolean ele ver se é de verdade e se sim retorna 1
  $valor = 10;
  $valor2 = (string) $valor;
  echo gettype($valor2);

  ?>
</body>
</html>