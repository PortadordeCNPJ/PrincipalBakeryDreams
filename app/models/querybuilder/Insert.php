<?php

namespace app\models\querybuilder;

class Insert
{ 

    //QueryBuilder, ajuda a trabalhar com a funções para o banco sem que tenha que escrever o insert
    //Todas as vez dentro do código
    public static function sql($table, $attributes){
        
    
    //$sql = insert into tb_produtos (nome, email) values(:nome, :email);


    //$sql que recebe o valor da tabela
    $sql = "insert into {$table}(";
    
    //$sql está concatenando as informações com implode, assim dentro colocando uma "," e passando os atributos
    //ficando da seguinte forma ex: INSERT ... tb... (valor1, valor2) values(
    $sql .= implode(',', array_keys($attributes)) . ') values(';

    //aqui está sendo concatenado a segunda parte do insert
    //:valor1, :valor2)
    $sql .= ':' . implode(', :', array_keys($attributes)) . ')';

    return $sql;
    }
}