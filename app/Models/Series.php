<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ConnectionBase\Connection;

class Series extends Model
{
    
    protected $_connectionBase;
    
    public function __construct() 
    {
        $this->_connectionBase = new Connection();
    }
    
    public function findBySeries($id) 
    {   
      return $this->_connectionBase->executeWithReturnAll
      ("SELECT s.name FROM tb_series s
            INNER JOIN tb_heroes_series hs ON hs.id_series = s.id
            INNER JOIN tb_heroes        h  ON h.id = hs.id_heroes_series
        WHERE h.id = $id");        
    }
}
