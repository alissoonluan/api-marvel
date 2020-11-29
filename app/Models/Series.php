<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ConnectionBase\Connection;

class Series extends Model
{
    
    protected $_connectionBase;
    
    public function __construct() {
        $this->_connectionBase = new Connection();
    }
    
    public function findBySeries() {   
      return $this->_connectionBase->executeWithReturnAll
      ("SELECT * FROM tb_series s
            INNER JOIN tb_heroes_series hs ON he.id_series = s.id
            INNER JOIN tb_heroes        h  ON h.id = he.id_heroes
        WHERE h.id = $id");        
    }
}
