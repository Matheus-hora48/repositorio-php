<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- Sera feita o incremento apos realizar a ação nele contida -->
  <h3>Pos-incremento</h3>

  <?php
    $a = 7;
    echo "O valor de a é $a <br/>";
    echo 'O valor de a é ' . $a++;
  ?>

  <!-- Quando é feita o incremento antes de realizar a ação -->
  <h3>Pré-incremento</h3>

  <?php
    $a = 7;
    echo "O valor de a é $a <br/>";
    echo 'O valor de a é ' . ++$a;
  ?>

  <!-- o decremento é no mesmo sentido so que subtraindo -->

</body>
</html>