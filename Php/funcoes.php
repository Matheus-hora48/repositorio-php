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

  //Tipo void pois nao tem retorno
  function exibirBoasVindas()
  {
    echo 'Bem vindo ao curso de PHP';
  };

  exibirBoasVindas()


  //Tipo com retorno

  function calcularAreaTerreno($largura, $comprimento){
    return $largura * $comprimento;
  };

  calcularAreaTerreno(30,50);


  ?>




</body>

</html>