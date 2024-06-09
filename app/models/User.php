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
}
