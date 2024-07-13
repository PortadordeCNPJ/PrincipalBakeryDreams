<?php

use app\classes\Validation;
use app\models\Produto;
use app\models\Transaction;

$validation = new Validation;

//Aqui $validate recebe o valor de $validation e joga a variavel de $_POST dentro da função. Dessa forma passando pelas filtragens do arquivo de validation.
$validate = $validation->validate($_POST);

$transaction = new Transaction;

$transaction->transactions(function () use ($transaction, $validate){
    $transaction->model(Produto::class)->insert($validate);
});

echo "<script>alert('Produto cadastrado com sucesso!!');</script>";

header('location:/cart');   