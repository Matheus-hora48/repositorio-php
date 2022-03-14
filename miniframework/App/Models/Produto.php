<?php

namespace App\Models;

use PDO;

class produto{

  protected $db;

  public function __construct(PDO $db){
    $this->db = $db;
  }
}

?>