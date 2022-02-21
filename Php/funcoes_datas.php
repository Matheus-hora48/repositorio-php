<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  /*
  //Recuperação da data atual
  echo date('d/m/Y H:i');

  //Saber de onde ta a localidade do php
  echo '<br/>';
  echo date_default_timezone_get();

  //Mudar a localização
  echo '<br/>';
  date_default_timezone_set('America/Sao_Paulo');
  echo date('d/m/Y H:i');
  */

  $data_inicial = '2022-02-21'; #para calcular sempre nesse padão
  $data_final = '2022-05-31';

  $time_inicial = strtotime($data_inicial);
  $time_final = strtotime($data_final);
  echo $data_inicial . '-' . $time_inicial;
  echo '<br/>';
  echo $data_final . '-' . $time_final;
  echo '<br/>';
  $diferenca_time = $time_final - $time_inicial;
  echo "A diferença de segundos entre as duas data é $diferenca_time";
  $segundo_dias = 24 * 60 * 60;
  echo '<br/>';
  echo "Um dia tem $segundo_dias segundos";
  echo '<br/>';
  $difrenca_de_dias = $diferenca_time /$segundo_dias;
  echo "A diferença de dias é $difrenca_de_dias";
  ?>
</body>

</html>