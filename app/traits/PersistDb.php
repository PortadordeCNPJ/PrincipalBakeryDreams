<?php

namespace app\traits;

use app\models\querybuilder\Insert;
use app\models\querybuilder\Update;


/**
 * É usado para utiliza-la apensa para puxar ela dentro do arquivo de Models, 
 * para poder usar a conexão 
 */
trait PersistDb
{
    /**
     * @param array $attributes
     * 
     * @return [type]
     */
    public function insert($attributes)
    {
        $attributes = (array) $attributes;

        //tb_usuarios e array com os valores
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