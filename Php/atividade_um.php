<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Vamos identificar se você pode ou não tomar sangue:</h1>
  <?php
  
  $idade = 20;
  $peso = 74;

  if(($idade > 16 || $idade < 69) && $peso >= 50 ){
    echo 'Atende os requisitos';
  } else {
    echo 'Não atende os requisitos';
  }
  
  ?>
</body>
</html>