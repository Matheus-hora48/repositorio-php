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

    $nome = 'Matheus Hora';
    $idade = 20;

    //operador . para juntar na concatenação(Juntar uma variavel com o texto)

    echo 'Bom dia, ' .$nome. ' fiquei sabendo que você tem ' .$idade. ' anos.';

    //pode ser feita utilizando as aspas duplas essa concatenacao
    echo '<br/>';
    echo "Bom dia, $nome fiquei sabendo qu você tem $idade anos."

    //caso nao for usar variaveis sempre bom usar o aspas simples
  ?>
</body>
</html>