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
  
    $x = 10;
    //A condição é lida apos a a sua execução -> entao ele executa o bloco de codigos primeiro e depois ver a condição
    do{
        echo 'Entrou no while';
    } while ($x < 9)

  ?>
</body>
</html>