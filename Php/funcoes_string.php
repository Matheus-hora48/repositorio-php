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


  $text = 'Curso completo de PHP <br/>';

  //srttolower = todo caracteres ficaram minusculo
  echo $text;
  echo strtolower($text);

  //strtoupper = todo caracteres ficaram em caixa alta
  echo $text;
  echo strtoupper($text);

  //ucfirst = Primeira letra em caixa alta
  echo $text;
  echo ucfirst($text);

  //ucfirst = Ele conta a quantidade de cracteres da strings (o espaço em branco conta)
  echo $text;
  echo strlen($text);

  //str_replace(procura por, subistitui por,var) = substitui uma cadeia de caractere por outra
  echo $text;
  echo str_replace('PHP','JavaScript',$text);
  ?>
</body>

</html>