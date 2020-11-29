<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ConnectionBase\Connection;

class Stories extends Model
{
    
    protected $_connectionBase;
    
     public function __construct() {
     $this->_connectionBase = new Connection();
    }
    
    public function findByStories($id) {   
 
      return $this->_connectionBase->executeWithReturnAll
      ("SELECT s.name FROM tb_stories s
            INNER JOIN tb_heroes_stories hs ON hs.id_stories = s.id
            INNER JOIN tb_heroes         h  ON h.id = hs.id_heroes_stories
        WHERE h.id = $id");        
    }
}

