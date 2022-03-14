<?php

namespace App\Controllers;

use MF\Controller\action;

class IndexController extends action{


	public function index() {
		$dados = array('Sofa', 'Cadeira', 'Armario');
		$this->render('index', $dados);
	}

	public function sobreNos() {
		$dados = array('Celular', 'Computador', 'Xbox');
		$this->render('sobreNos', $dados);
	}

	
}


?>