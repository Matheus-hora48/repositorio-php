<?php

//para criar uma interface, nela vc nao colocar oq o metodo vai fz apenas declara
interface EquipamentoEletronicoInterface{
  public function ligar();
  public function desligar();
  //Somente metodos publicos
}


class Geladeira implements EquipamentoEletronicoInterface {
  public function abrirPorta(){
    echo 'Abrir porta';
  }
  public function ligar(){
    echo 'Ligar';
  }
  public function desligar(){
    echo 'Desligar';
  }
}

class Tv implements EquipamentoEletronicoInterface{
  public function trocarCanal(){
    echo 'Trocar canal';
  }
  public function ligar(){
    echo 'Ligar';
  }
  public function desligar(){
    echo 'Desligar';
  }
}

interface MamimefroInterface {
  public function respirar();
}

interface TerrestreInterface{
  public function andar();
}

interface AquaticoInterface{
  public function nadar();
}

class Humano implements MamimefroInterface, TerrestreInterface {
  public function respirar(){
    echo 'Respirar';
  }

  public function andar(){
    echo 'Andar';
  }
  
  public function conversar(){
    echo 'Conversar';
  }
}

class Baleia implements MamimefroInterface, AquaticoInterface{
  public function respirar(){
    echo 'Respirar';
  }

  public function nadar(){
    echo 'Nadar';
  }

  public function esguichar(){
    echo 'Esquichar';
  }
}

interface AnimalInterface{
  public function comer();
}

interface AveInterface extends AnimalInterface{
  public function voar();
}

class Papagaio implements AveInterface{
  public function comer(){
    echo 'Comer';
  }
  public function voar(){
    echo 'Voar';
  }
}