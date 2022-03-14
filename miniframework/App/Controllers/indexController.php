<?php

namespace App\Controllers;

class IndexController {

	public function index() {
		$dados = array('Sofa', 'Cadeira', 'Armario');
		require_once "../App/Views/index/index.phtml";
	}

	public function sobreNos() {
		$dados = array('Celular', 'Computador', 'Xbox');
		require_once "../App/Views/index/sobreNos.phtml";
	}
}


?>