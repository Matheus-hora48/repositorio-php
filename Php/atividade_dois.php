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

  function calcularImposto($salario)
  {
    $imposto = 0;

    if ($salario < 1903.98) {
      $imposto = 'Você é isento de imposto';
    } else if ($salario > 1903.98 && $salario < 2826.65) {
      $procetagem = 7.5;
      $imposto = ($salario * $procetagem) / 100;
    } else if ($salario > 2826.65 && $salario < 3751.05) {
      $procetagem = 15;
      $imposto = ($salario * $procetagem) / 100;
    } else if ($salario > 3751.05 && $salario < 4664.68) {
      $procetagem = 22.5;
      $imposto = ($salario * $procetagem) / 100;
    } else {
      $procetagem = 27.5;
      $imposto = ($salario * $procetagem) / 100;
    }
    return $imposto;
  };
  $resultado = calcularImposto(4000);
  echo "O imposto ficou: $resultado"
  ?>
</body>

</html>