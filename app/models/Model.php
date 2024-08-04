<?php

namespace app\Models;

use app\classes\Bind;
use app\traits\PersistDb;
use app\models\Connection;


abstract class Model
{

    //Tem este nome, porque quando tem alguma coisa dentro do banco de dados ele persiste nos dados
    use PersistDb;

    //Essa função protege a conecção com o banco, permitindo que apenas quem está dentro de Model possar usar a conecção.
    protected $connection;

    public function __construct()
    {
        //$this chamando a conecção com o banco e chamando junto a classe com o método do banco
        $this->connection = Bind::get('connection');
    }

    public function all()
    {
        $sql = "select * from {$this->table}";
        //o prepare() é usado para poder substituir o valor que está vindo do sql
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

    //Essa função faz a busca das informações dentro da tabela
    public function find($field, $value)
    {
        $sql = "select * from {$this->table} where {$field} = :{$field}";
        //o bindValue é oque vai fazer a substituição dos doque esta no select, pela ? que está sendo chamada
        $list = $this->connection->prepare($sql);

        //O bindParam não vai funcionar se você tentar passar um valor direto para ele, pois ele espera os paramentos da função para funcionar
        $list->bindValue($field, $value);
        $list->execute();

        return $list->fetch();
    }

    public function delete($field, $value)
    {
        $sql = "delete from {$this->table} where $field = $value";
        $delete = $this->connection->prepare($sql);
        $delete->bindValue($field, $value);
        $delete->execute();

        return $delete->rowCount();
    }

}
