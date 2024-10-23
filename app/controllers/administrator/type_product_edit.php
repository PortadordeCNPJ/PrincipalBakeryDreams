<?php

use app\models\TipoProduto;

//Filtro de ID para transformalo em numero inteiro 
$id_tipoproduto = filter_input(INPUT_GET, 'id_tipoproduto', FILTER_SANITIZE_NUMBER_INT);

$type_product = new TipoProduto;
//Função find que procura os dados dentro das tabelas (Para Busca)
$type_product_found = $type_product->find('id_tipoproduto', $id_tipoproduto);

$layout_adm->add('type_product_edit');
