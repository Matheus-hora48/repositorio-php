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

  $registro = [
    ['Titulo' => 'Titulo notícia 1', 'Conteudo' => 'Conteudo notícia 1'],
    ['Titulo' => 'Titulo notícia 2', 'Conteudo' => 'Conteudo notícia 2'],
    ['Titulo' => 'Titulo notícia 3', 'Conteudo' => 'Conteudo notícia 3']
  ];

  echo '<pre>';
  print_r($registro);
  echo '</pre>';

  $numero = count($registro);
  $idx = 0;
  while ($idx < $numero) {
    echo '<h3>' . $registro[$idx]['Titulo'] . '</h3>';
    echo '<p>' . $registro[$idx]["Conteudo"] . '</p>';
    echo '<hr>';
    $idx++;
  };


  // do {
  //   echo '<h3>' . $registro[$idx]['Titulo'] . '</h3>';
  //   echo '<p>' . $registro[$idx]["Conteudo"] . '</p>';
  //   echo '<hr>';
  //   $idx++;
  // } while ($idx < $numero)

  for ($idx = 0; $idx < $numero; $idx++) {
    echo '<h3>' . $registro[$idx]['Titulo'] . '</h3>';
    echo '<p>' . $registro[$idx]["Conteudo"] . '</p>';
    echo '<hr>';
  };
  ?>
</body>

</html>