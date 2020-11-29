<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ConnectionBase\Connection;

class Stories extends Model
{
    
        protected $_dbName;
        protected $_connectionBase;
    
        public function __construct($dbname) {
            $this->_dbName = $dbname;
            $this->_connectionBase = new Connection($this->_dbName);
        }
    
        public function findByStories() {   
          return $this->_connectionBase->executeWithReturnAll
          ("SELECT s.name FROM tb_stories s
                INNER JOIN tb_heroes_stories hs ON hs.idstories = c.id
                INNER JOIN tb_heroes         h  ON h.id = he.idheroes
            WHERE h.id = $id");        
        }
}
