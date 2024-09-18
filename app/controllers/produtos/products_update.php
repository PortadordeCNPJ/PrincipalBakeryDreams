<?php

use app\models\ReadCart;
use app\classes\Validation;

$product = new ReadCart;
$validation = new Validation;


$validate = $validation->validate($_POST);

//Carrega dentro da variavel $user que recebe da tabela de users, para dar um Update utilizando a função update
$updated = $product->update($validate,['id_produto' => $validate->id_produto]);

if($updated) {
    header('location:/');
}
