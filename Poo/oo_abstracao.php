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

  //this->var_name: serve para retornar o valor dos atributos
  class Funcionario
  {

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilho = null;
    public $cargo = null;
    public $salario = null;

    //getters e setters(overloading)

    function __set($atributo, $valor)
    {
      $this->nome = $valor;
      $this->numFilho = $valor;
    }

    function __get($atributo)
    {
      return $this->$atributo;
    }
    /*
    //metodo set serve para definir e manipular os valores
    function setNome($nome)
    {
      $this->nome = $nome;
    }

    function setTelefone($telefone)
    {
      $this->telefone = $telefone;
    }

    function setNumFilhos($numFilho)
    {
      $this->numFilho = $numFilho;
    }

    //get serve para retornar 
    function getNome()
    {
      return $this->nome;
    }

    function getTelefone()
    {
      return $this->telefone;
    }

    function getNumFilhos()
    {
      return $this->numFilho;
    }
    */


    //metodos
    function resumirCadFunc()
    {
      return $this->__get('nome'). 'tem' . $this->__get('numFilhos') .' filho(s)';
    }

    function modificarNumFilhos($numFilho)
    {
      $this->numFilho += $numFilho;
    }
  }

  //criando o objeto

  $y = new Funcionario();
  $y->__set('nome', 'Matheus');
  $y->__set('numFilho', '2');

  echo $y->resumirCadFunc();

  //echo $y->__get('nome') . ' possui ' . $y->__get('numFilho') . ' filhos(s)';


  $x = new Funcionario();
  $x->__set('nome', 'Maria');
  $x->__set('numFilhos', '1');

  echo $x->resumirCadFunc();

  //Para retornar de modo dinamico com o get
  //echo $x->__get('nome') . ' possui ' . $x->__get('numFilho') . ' filhos(s)';
  /*
  //para acessar atributos ou metodos utilizamos o ->
  echo $y->resumirCadFunc();
  echo '<hr>';
  $y->modificarNumFilhos(3);
  echo $y->resumirCadFunc();
  */
  ?>
</body>

</html>