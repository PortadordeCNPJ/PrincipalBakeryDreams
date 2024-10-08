<?php

use app\classes\Validation;
use app\models\TipoProduto;

$type_product = new TipoProduto;
$validation = new Validation;


$validate = $validation->validate($_POST);

//Carrega dentro da variavel $user que recebe da tabela de users, para dar um Update utilizando a função update
$updated = $type_product->update($validate,['id_tipoproduto' => $validate->id_tipoproduto]);

if($updated) {
    header('location: /administrator/type_product_consult');
}
