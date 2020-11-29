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
    
    public function findByStories() {   
      return $this->_connectionBase->executeWithReturnAll
      ("SELECT s.name FROM tb_stories s
            INNER JOIN tb_heroes_stories hs ON hs.id_stories = c.id
            INNER JOIN tb_heroes         h  ON h.id = he.id_heroes
        WHERE h.id = $id");        
    }

