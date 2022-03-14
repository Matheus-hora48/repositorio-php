<?php

namespace App;

use PDO;
use PDOException;

class Connection{

  public function getDb(){
    try{

      $conn = new PDO(
        "mysql:host=localhost;dbname=mvc;charset=uft8",
        "root",
        ""
      );

      return $conn;
    } catch (PDOException $e) {

    }
  }
}

?>