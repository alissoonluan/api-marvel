<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ConnectionBase\Connection;

class Events extends Model
{
    
        protected $_dbName;
        protected $_connectionBase;
    
        public function __construct($dbname) {
            $this->_dbName = $dbname;
            $this->_connectionBase = new Connection($this->_dbName);
        }
    
        public function findByEvents($id) {   
          return $this->_connectionBase->executeWithReturnAll
          ("SELECT e.name FROM tb_events e
                INNER JOIN tb_heroes_events he ON he.idevents = c.id
                INNER JOIN tb_heroes        h  ON h.id = he.idheroes
            WHERE h.id = $id");        
        }
}
