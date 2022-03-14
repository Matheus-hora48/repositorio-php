<?php

namespace MF\Controller;

abstract class action{
  
  protected $view;

	public function __construct(){
		$this->view = new \stdClass();
	}

  protected function render($view,$dados){
		$classeAtual = get_class($this);

		$classeAtual = str_replace('App\\Controllers\\', '', $classeAtual);

		$classeAtual = str_replace('Controller', '' , $classeAtual);

		require_once "../App/Views/". $classeAtual ."/". $view .".phtml";
	}
}
