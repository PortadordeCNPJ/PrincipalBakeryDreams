<?php

namespace app\Models;

use app\classes\Bind;
use app\traits\PersistDb;
use app\models\Connection;


//abstract class é usada para que todas as classes filhas possam usar seus métodos
//Apenas as classes filhas podem usar os métodos de dentro dela
abstract class Model
{

    //Usado para que o arquivo do PersistDb possa ter acesso ao banco de dados.
    use PersistDb;

    //Essa função protege a conexão com o banco, permitindo que apenas os métodos e classes filhas de Model possam utilizar dela.
    protected $connection;

    public function __construct()
    {
        //$this chamando a conecção com o banco e chamando junto a classe com o método do banco
        $this->connection = Bind::get('connection');
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        //o prepare() é usado para poder substituir o valor que está vindo do sql
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

    //Essa função faz a busca das informações dentro da tabela
    public function find($field, $value)
    {
        $sql = "SELECT * FROM {$this->table} WHERE {$field} = :{$field}";
        //o bindValue é oque vai fazer a substituição dos doque esta no select, pela ? que está sendo chamada
        $list = $this->connection->prepare($sql);

        //O bindParam não vai funcionar se você tentar passar um valor direto para ele, pois ele espera os paramentos da função para funcionar
        $list->bindValue($field, $value);
        $list->execute();

        return $list->fetch();
    }

    public function delete($field, $value)
    {
        $sql = "delete from {$this->table} where $field = ?";
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(1, $value);
        $delete->execute();

        return $delete->rowCount();
    }
}
