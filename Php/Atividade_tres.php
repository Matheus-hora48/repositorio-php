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

  function sortearNumero()
  {
    $array = array();
    for ($cont = 1; $cont <= 6; $cont++) {
      $debounce = true;
      while ($debounce == true) {
        $num = rand(1, 10);
        foreach ($array as $veri) {
          if ($num != $veri) {
            break;
          };
        };
      };
      array_push($array, $num);
    };
    echo '<pre>';
    print_r($array);
    echo '</pre>';
  }
  echo sortearNumero();
  ?>
</body>

</html>