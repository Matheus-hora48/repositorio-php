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

  //false (true/false) - tipo boolean 
  //null e empty - valores especiais
  //null é apenas null mas o empty pode ser vazio ou null
  //false fica como null

  //is_null -> função que retorna se a variavel é null
  //empty -> Verifica se a var ta vazia

  $funcionario1 = null;
  $funcionario2 = '';

  if (is_null($funcionario1)) {
    echo 'Sim';
  } else {
    echo 'Não';
  }

  echo '<br/>';
  if (is_null($funcionario2)) {
    echo 'Sim';
  } else {
    echo 'Não';
  }

  echo '<br/>';
  if (empty($funcionario1)) {
    echo 'Sim ta vaiza';
  } else {
    echo 'Não ta vaiza';
  }

  echo '<br/>';
  if (empty ($funcionario2)) {
    echo 'Sim ta vaiza';
  } else {
    echo 'Não ta vaiza';
  }

  ?>
</body>

</html>