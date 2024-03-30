<?php

namespace app\traits;

use app\models\querybuilder\Insert;
use app\models\querybuilder\Update;

trait PersistDb
{

    //função que vai dar um INSERT geral, poderá ser usada em todo o código
    public function insert($attributes)
    {
        $attributes = (array) $attributes;

        $sql = Insert::sql($this->table, $attributes);

        $insert = $this->connection->prepare($sql);

        return $insert->execute($attributes);
    }

    //Faz um update dentro geral em todas as tebelas do código.
    public function update($attributes, $where)
    {
        $attributes = (array) $attributes;

        $sql = (new Update)->where($where)->sql($this->table, $attributes);

        $update = $this->connection->prepare($sql);

        $update->execute($attributes);

        return $update->rowCount();
    }
}
