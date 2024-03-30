<?php

namespace app\models\querybuilder;

class Insert
{ 

    //QueryBuilder, ajuda a trabalhar com a funções para o banco sem que tenha que escrever o insert
    //Todas as vez dentro do código
    public static function sql($table, $attributes){
    
    $sql = "insert into {$table}(";
    //Essa propriedade $sql, está fazendo um insert e está concatenando o resultado dos atributos dentro 
    //dos campos corretos
    $sql .= implode(',', array_keys($attributes)) . ') values(';
    $sql .= ':' . implode(', :', array_keys($attributes)) . ')';

    return $sql;
    }
}