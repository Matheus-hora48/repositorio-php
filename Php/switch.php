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
  
  $parametro = 2;
  //true = 1
  switch($parametro){
    case 1:
      echo 'Entrou no case 1';
      break;

    case 2:
      echo 'Entrou no case 2';
      break;

    case 1:
      echo 'Entrou no case 3';
      break;

    //Se nao satisfazer nenhuma delas fica nesse
    default;
      break;
  }

  ?>
</body>
</html>