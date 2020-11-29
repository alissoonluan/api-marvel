<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ConnectionBase\Connection;

class Series extends Model
{
    
        protected $_dbName;
        protected $_connectionBase;
    
        public function __construct($dbname) {
            $this->_dbName = $dbname;
            $this->_connectionBase = new Connection($this->_dbName);
        }
    
        public function findBySeries() {   
          return $this->_connectionBase->executeWithReturnAll
          ("SELECT * FROM tb_series s
                INNER JOIN tb_heroes_series hs ON he.idseries = s.id
                INNER JOIN tb_heroes        h  ON h.id = he.idheroes
            WHERE h.id = $id");        
        }
}
