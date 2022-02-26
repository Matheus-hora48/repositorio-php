<?php


//Como exibir um erro custumizado
class MinhaExceptionCustumizada extends Exception{

  private $erro = '';
  public function __construct($erro){
    $this->erro = $erro;
  }

  public function exibirMensagemErroCustumizada(){
    return $this->erro;
  }

}

try{

  throw new MinhaExceptionCustumizada('Erro teste');

} catch (MinhaExceptionCustumizada $e){
  echo $e->exibirMensagemErroCustumizada();
} 

?>