<?php

use app\classes\Validation;
use app\models\ReadCart;
use app\models\Transaction;

$validation = new Validation;

//Aqui $validate recebe o valor de $validation e joga a variavel de $_POST dentro da função. Dessa forma passando pelas filtragens do arquivo de validation.
$validate = $validation->validate($_POST);

//Cria o objeto do Transaction
$transaction = new Transaction;

//Nesse objeto ele executa a função de transactions, cria uma função dentro dessa função passando como parametro $transaction e $validate
//A função transactions faz o commit e casa der erro faz um rollback;
$transaction->transactions(function () use ($transaction, $validate){

    //Aqui ele passa o objeto e passa a função de model que pega o caminho com o namespace e acha a tabela para dar o insert, assim da o insert nas informações
    $transaction->model(ReadCart::class)->insert($validate);
});

echo "<script>alert('Produto cadastrado com sucesso!!');</script>";

header('location: /consulta_produto');   