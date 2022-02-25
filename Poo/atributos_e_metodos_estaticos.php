<?php

//utiliza a palavra static para fz atributos estaticos

class Exemplo{
  public static $atributo1 = 'Eu sou um atributo estatico';
  public $atributo2 = 'Eu sou um atributo normal';

  public static function metodo1(){
    echo 'Eu sou um metodo estatico';
  }

  public function metodo2(){
    echo 'Eu sou um metodo normal';
  }
}

/*
//$x = new
//Para ver os atributo estatico nao preciso criar um objeto 
echo Exemplo::$atributo1; //Apenas retorna o nome da class
echo '<br/>';
echo Exemplo::metodo1();
*/

//Outros atributos de this e -> nao funciona com metodos estaticos
echo Exemplo::metodo2();
