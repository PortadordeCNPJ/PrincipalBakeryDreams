<?php

namespace app\models;

use Closure;
use Exception;

class Transaction extends Model
{
    public function transactions(Closure $callback)
    {

        //beginTransaction é uma função que não deixa o código dar commit antes que a transação enteja totalmente finalizada
        //É uma função do PDO
        $this->connection->beginTransaction();

        try {

            //Caso a conexão de certo ela vai executar nessa variavel de $callback como uma função e vai executar o commit(); dentro do banco de dados

            $callback();

            $this->connection->commit();
            
        } catch (\Throwable $e) {

            //Caso a conexão de errado ela vai cair no catch e não vai deixar a transação ser finalizada por conta do rollback();
            $this->connection->rollback();

            var_dump($e);
            // dd($e->connection->rollback);
        }
    }

    //Essa função vai retornar o nome do Model que vc puxar para fazer o Insert, assim como é feito no arquivo de user_store. Ex: $transaction->model(User::class)->insert($validate);
    public function model($model)
    {
        return new $model;
    }


    //Função que vai executar
    public function __get($name)
    {
        if (!property_exists($this, $name)) {
            //$model recebe o começo do namespace app/models concatena \\ = \, ucfirst transforma a primeira letra em maiúscula nesse caso é Model
            //$name = model;
            $model = __NAMESPACE__ . '\\' . ucfirst($name);
            //Retorna o caminho de app/models/Model e atribui para várivel
            return new $model();
        }
    }
}