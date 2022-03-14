<?php

namespace App\Controllers;

use MF\Controller\action;

class IndexController extends action{


	public function index() {
		//$dados = array('Sofa', 'Cadeira', 'Armario');

		//Estancia da conexão
		
		$this->render('index', 'layout1');
	}

	public function sobreNos() {
		//$dados = array('Celular', 'Computador', 'Xbox');
		$this->render('sobreNos', 'layout1');
	}

	
}
