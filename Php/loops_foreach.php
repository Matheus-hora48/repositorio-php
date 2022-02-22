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
  
    $itens = ['Sofa','Mesa','Cadeira','Fogão','Geladeira'];

    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    // serve pra percorrer array e objetos
    foreach($itens as $item){
      echo "$item <br/>";
      if($item == 'Mesa'){
        echo 'Compre uma mesa e ganhe desconto';
      };
    }
  ?>
</body>
</html>