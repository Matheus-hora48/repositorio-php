<?php

namespace App\Controllers;

use MF\Controller\action;
use App\Connection;
use App\Models\Produto;

class IndexController extends action{


	public function index() {
		//$dados = array('Sofa', 'Cadeira', 'Armario');

		//istancia da conexão
		$conn = Connection::getDb();

		//instancia de modelo
		$produto = new Produto($conn);

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		$this->render('index', 'layout1');

		
	}

	public function sobreNos() {
		//$dados = array('Celular', 'Computador', 'Xbox');
		$this->render('sobreNos', 'layout1');
	}

	
}
