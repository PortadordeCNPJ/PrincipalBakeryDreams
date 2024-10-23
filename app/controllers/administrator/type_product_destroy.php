<?php

use app\models\TipoProduto;

//Filtro de ID para transformalo em numero inteiro 
$id_tipoproduto = filter_input(INPUT_GET, 'id_tipoproduto', FILTER_SANITIZE_NUMBER_INT);

$type_products = new TipoProduto;

//Carrega dentro da variavel $user que recebe da tabela de users, para dar um delete utilizando a função update
$type_products_destroy = $type_products->delete('id_tipoproduto', $id_tipoproduto);

if($type_products_destroy) {
    echo "<script>alert('Tipo de Produto excluido com sucesso!!');</script>";
    header('location: /type_product_consult');
}
