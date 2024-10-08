<?php

use app\models\TipoProduto;

$type_product = new TipoProduto;
// $users = $user->all();

$type_products = $type_product->all();

$layout->add('administrator/type_product_consult');