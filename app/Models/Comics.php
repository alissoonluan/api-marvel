<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ConnectionBase\Connection;

class Comics extends Model
{
    protected $_dbName;
    protected $_connectionBase;

    public function __construct($dbname) {
        $this->_dbName = $dbname;
        $this->_connectionBase = new Connection($this->_dbName);
    }

    public function findByComics($id) {   
      return $this->_connectionBase->executeWithReturnAll
      ("SELECT c.name FROM tb_comics c
            INNER JOIN tb_heroes_comics hc ON hc.idcomics = c.id
            INNER JOIN tb_heroes        h  ON h.id = hc.idheroes
        WHERE h.id = $id");        
    }


}
