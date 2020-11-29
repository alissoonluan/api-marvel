<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ConnectionBase\Connection;

class Heroes extends Model
{
    protected $_dbName;
    protected $_connectionBase;

    public function __construct($dbname) {
        $this->_dbName = $dbname;
        $this->_connectionBase = new Connection($this->_dbName);
    }

    public function allHeroes() {   
      return $this->_connectionBase->executeWithReturnAll("SELECT * FROM tb_heroes");        
    }

    public function findById($id) {
        return $this->_connectionBase->executeWithReturnAll("SELECT * FROM tb_heroes WHERE id = $id");   
    }


}
