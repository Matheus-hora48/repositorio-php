<?php

//Serve para manter a seguraça do sistema, 

//public -> estão disponiveis para ser acessados de qualquer jeito
//protected
//private


class pai{
  private $nome = 'Jorge';
  protected $sobrenome = 'silva';
  public $humor = 'Feliz';

  public function __get($attr){
    return $this->$attr;
  }

  public function __set($attr,$value){
    $this->$attr = $value;
  }

  /*
  //Recupera o nome
  public function getNome(){
    return $this->nome;
  }

  //Muda o nome 
  public function setNome($value){
    $this->nome = $value;
  }
  */
}
/*
$pai = new Pai();
echo $pai-> getNome();
$pai->setNome('Matheus');
echo $pai-> getNome();

$pai->humor = 'Triste';
echo '<br>';
echo $pai-> humor;
*/
