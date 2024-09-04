<?php

use app\models\ReadCart;

//Filtro de ID para transformalo em numero inteiro 
$id_produto = filter_input(INPUT_GET, 'id_produto', FILTER_SANITIZE_NUMBER_INT);

$products = new ReadCart;
//Função find que procura os dados dentro das tabelas (Para Busca)
$productsFound = $products->find('id_produto', $id_produto);

$layout->add('administrator/products_edit');
