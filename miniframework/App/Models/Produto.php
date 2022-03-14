<?php

namespace App\Models;
use MF\Model\Model;

class Produto extends Model{

	protected $db;

	public function getProdutos() {
		
		$query = "select id, descricao, preco from tb_produtos";
		return $this->db->query($query)->fetchAll();
	}
}

?>