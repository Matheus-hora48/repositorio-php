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

  /*
  No php exite varios tipo de variaveis;
  Sempre começar com $

  string: são as palavras, frases declaradas
  int: valor inteiro
  float valor real
  boolean: true ou false

  declara o tipo da varialvel sozinho
  */

  //string
  $nome = 'Matheus Hora';
  //int
  $idade = 20;
  //float
  $peso = 74.5;
  //boolean
  $fumante = true

  ?>
  <h1>Dados cadastrais</h1>
  <br />
  <p>Ficha do cliente: <?= $nome ?></p>
  <br />
  <p>Idade do cliente: <?= $idade ?></p>
  <br />
  <p>Peso do cliente: <?= $peso ?></p>
  <br />
  <p>Ele é um fumante: <?= $fumante ?></p>


</body>

</html>