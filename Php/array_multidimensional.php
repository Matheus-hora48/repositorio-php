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

    $lista_coisa = array('');

    $lista_coisa['frutas'] = array(1 =>'Banana', 2 => 'Maça', 3 => 'Morango', 4 => 'Uva');
    $lista_coisa['Pessoas'] = [1 => 'João', 2=> 'José', 3 => 'Maria'];


    echo '<pre>';
    print_r($lista_coisa);
    echo '</pre>';
    echo '<hr>';
    echo $lista_coisa['frutas'][3];
  ?>
</body>

</html>