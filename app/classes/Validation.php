<?php

namespace app\classes;

class Validation
{
    //Variavel privada de validate, que é transformada em um array vazio
    private $validate = [];

    //Função validade que recebe a variavel $post, que são todos os valores que vão vir do form
    public function validate($post)
    {
        //Dentro do foreach acontece a filtragem de todos os valores que vem da váriavel $post
        //$post é transformado em $key e $values são seu valores que vem do input, assim vem $validade passando $key para um array
        //E depois pegando os valores do $value e os filtrando
        foreach ($post as $key => $value) {
            $this->validate[$key] = filter_var($value, FILTER_SANITIZE_STRING);
        }

        //Após isso é retornado o $validade na forma de objeto
        return (object) $this->validate;
    }
}