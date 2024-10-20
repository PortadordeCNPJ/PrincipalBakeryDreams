<?php

namespace app\models;

class User extends Model
{
    protected $table = 'tb_usuarios';

    //função para fazer um intert into dentro da tabela de usuario no bando
    // public function insert(array $attributes) {
    //     $sql = "INSERT INTO {$this->table}(name,email,password) values(:name,:email,:password)";

    //     //O prepare() é usado aqui para poder trabalhar com os place holders
    //     $insert = $this->connection->prepare($sql);

    //     //foreach passando os valores do formulario e passando para as colunas da tabela
    //     // foreach ($attributes as $key => $value) {
    //     //     $insert->bindValue($key, $value);
    //     // }

    //     return $insert->execute($attributes);
    // }

    //         public function update(array $attributes)
    //         {
    //             $sql  = "update {$this->table} set name = :name, email = :email, password = :password where id = :id";
    //             $update = $this->connection->prepare($sql);
    //             $update->execute($attributes);

    //             return $update->rowCount();
    //         }

    // public function getUser(){
    //     $sql = "SELECT * FROM {$this->table} WHERE nome LIKE nome ORDER BY :nome ASC";
    //     $list = $this->connection->prepare($sql);
    //     $list->execute();

    //     return $list->fetchAll();
    // }

    public function updateRecuperacaoSenha($emailCorrect, $token)
    {
        $sql = "UPDATE {$this->table} SET token = :token, token_validade = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = :email";
        $update = $this->connection->prepare($sql);
        $update->bindParam(":token", $token);
        $update->bindParam(":email", $emailCorrect);
        $update->execute();

        return $update->rowCount();
    }

    public function selecUserToken()
    {
        
    }
}
