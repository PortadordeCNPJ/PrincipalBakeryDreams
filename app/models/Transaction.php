<?php

namespace app\models;

use Closure;
use Exception;

class Transaction extends Model
{
    //Usando o callback para poder pegar os valores de outra função para poder usar na função desejada
    public function transactions(Closure $callback)
    {

        $this->connection->beginTransaction();

        try {

            $callback();

            $this->connection->commit();
        } catch (\Throwable $e) {

            $this->connection->rollback();

            var_dump($e);
            // dd($e->connection->rollback);
        }
    }
    public function model($model)
    {
        return new $model;
    }

    public function __get($name)
    {
        if (!property_exists($this, $name)) {
            $model = __NAMESPACE__ . '\\' . ucfirst($name);
            return new $model();
        }
    }
}
