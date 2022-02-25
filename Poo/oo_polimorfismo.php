<?php

//Polimorfismo

//Vai fazer uma sobrescrita na classe filha  

class Carro extends Veiculo {
  public $teto_solar = true;

  function __construct($placa, $cor) {
    $this->placa = $placa;
    $this->cor = $cor;
  }

  function abrirTetoSolar() {
    echo 'Abrir teto solar';
  }

  function alterarPosicaoVolante() {
    echo 'Alterar posição volante';
  }
}

class Moto extends Veiculo {
  public $contraPesoGuidao = true;

  function __construct($placa, $cor) {
    $this->placa = $placa;
    $this->cor = $cor;
  }

  function empinar() {
    echo 'Empinar';
  }
}

class Veiculo {
  public $placa = null;
  public $cor = null;

  function acelerar() {
    echo 'Acelerar';
  }

  function freiar() {
    echo 'Freiar';
  }

  function trocarMacha(){
    echo 'Desengatar embreagem com o pé e engatar a macha com a mão';
  }

}

$carro = new Carro('ABC1234', 'Branco');
$moto = new Moto('DEF1122', 'Preto');

$carro->trocarMacha();
$moto->trocarMacha();