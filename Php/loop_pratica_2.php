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

  $funcionarios = [
    ['Nome' => 'João', 'Salario' => 2500],
    ['Nome' => 'Maria', 'Salario' => 3500],
    ['Nome' => 'Julia', 'Salario' => 2000],
  ];

  echo '<pre>';
  print_r($funcionarios);
  echo '</pre>';

  //Na primeira ele salva o indice e na outra as variaveis
  foreach ($funcionarios as $idx => $funcionario) {

    foreach($funcionario as $idx2 => $valor){
      echo "$idx2 - $valor <br/>";
    }
    echo '<hr>';
  }
  ?>
</body>

</html>