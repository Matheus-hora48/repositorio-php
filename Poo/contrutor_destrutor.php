<?php

class Pessoa{

  //atributos
  public $name = null;

  //serve para realizar algum parametro quando o obejeto for removido ou quando terminar de fazer alguma coisa
  
  function __destruct()
  {
    echo 'remodido';
  }

  function __construct($nome) {
    echo 'Obejto criado';
    $this->nome = $nome;
  }

  function __get($atributo){
    return $this-> atributo = $atributo;
  }
}

//unset($pessoa);
$pessoa = new Pessoa('Matheus');
echo $pessoa -> __get('nome');



?>
