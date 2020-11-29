<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ConnectionBase\Connection;

class Events extends Model
{
        protected $_connectionBase;
    
        public function __construct() {
            $this->_connectionBase = new Connection();
        }
    
        public function findByEvents($id) {   
          return $this->_connectionBase->executeWithReturnAll
          ("SELECT e.name FROM tb_events e
                INNER JOIN tb_heroes_events he ON he.id_events = e.id
                INNER JOIN tb_heroes        h  ON h.id = he.id_heroes_events
            WHERE h.id = $id");        
        }
}
