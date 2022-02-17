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

    //Criar variavel contante

    //função para criar variavel contante, sempre definir elas em caixa alta
    define('BD_URL','endereco_bd_dev');
    define('BD_USUARIO','nome_do_usuario');
    define('BD_SENHA','senha');

    //para chamar a variavel nao precisa usar o $ so colocar ela
    echo BD_URL .'<br/>';
    echo BD_USUARIO .'<br/>';
    echo BD_SENHA .'<br/>';

  ?>
</body>
</html>