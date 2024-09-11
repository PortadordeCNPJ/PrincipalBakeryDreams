<?php

use app\models\ReadCart;
use app\models\TipoProduto;

//Filtro de ID para transformalo em numero inteiro 
$id_produto = filter_input(INPUT_GET, 'id_produto', FILTER_SANITIZE_NUMBER_INT);

$kindProduct = new TipoProduto;
$products = new ReadCart;
//Função find que procura os dados dentro das tabelas (Para Busca)
$productsFound = $products->find('id_produto', $id_produto);

$kindProducts = $kindProduct->all();

$layout->add('administrator/products_edit');
