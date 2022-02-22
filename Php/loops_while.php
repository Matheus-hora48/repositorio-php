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
  
    $num = 1;
    while($num < 1000){
      $num += 1;
      continue;

      //o continue nao pode ficar apos o criterio de parada
      if($num == 2 || $num == 6){
        continue; #ele ignora o proximo 
      }
      echo "$num <br/>";

      

      /*
      //Serve para forçar uma parada
      if($num > 100){
        break;
      }
      */
    }
    $num 
  ?>
</body>
</html>