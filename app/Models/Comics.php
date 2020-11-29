<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\ConnectionBase\Connection;

class Comics extends Model
{
    protected $_connectionBase;

    public function __construct() {
        $this->_connectionBase = new Connection();
    }

    public function findByComics($id) {   
      return $this->_connectionBase->executeWithReturnAll
      ("SELECT c.name FROM tb_comics c
            INNER JOIN tb_heroes_comics hc ON hc.id_comics = c.id
            INNER JOIN tb_heroes        h  ON h.id = hc.id_heroes_comics
        WHERE h.id = $id");        
    }


}
