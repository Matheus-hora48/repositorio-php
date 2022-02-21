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

  //sequenciais (numéricos)

  /* pode ser criada assim 
      $lista_frutas = array(
        'banana','maça','morango','uva'
      );
    


    $lista_frutas = ['banana','maça','morango','uva']; #outro jeito de criar
    //Adicionando novos
    $lista_frutas[] = 'Abacate';
    */


  /*
    //Tags para debug
    echo '<pre>';
    //mais especifica
    var_dump($lista_frutas);
    echo '<br/>';
    echo '</pre>';
    //tag pre serve para organizar como um array
    echo '<pre>';
    //mais simples
    print_r($lista_frutas);
    echo '</pre>';
    

    echo $lista_frutas[3] #Serve para retornar um item especifico
    */


  //associativos -> quando coloca qual o indice de cada elemento de forma manual

  $lista_frutas = array(
    'a' => 'banana', 'b' => 'maça', 'x' => 'morango', '2' => 'uva'
  );

  echo '<pre>';
  //mais especifica
  var_dump($lista_frutas);
  echo '<br/>';
  echo '</pre>';
  ?>
</body>

</html>