<?php

  //Conteudo que possivelmente pode ter erros
  try {

    echo '<h3> ***TRY***</h3>';

    //$sql ='Select * from clientes';
    //mysql_query($sql);

    if(!file_exists('require_arquivo.php')){ #serve para testar se o arquivo existe ou nao 
      throw new Exception('O arquiivo não ta disponivel'); #serve para causar erro intensinal
    }; 


    //serve para fazer uma coisa apos ter um erro
  } catch(Error $e){
    echo '<h3> ***CATCH ERRO***</h3>';

    //vai executar apos a tentativa de fazer alguma coisa
  } catch(Exception $e){
    echo '<h3> ***CATCH EXCEPTION***</h3>';

  } finally{
    echo '<h3> ***FINALLY***</h3>';
  }

  
 
?>