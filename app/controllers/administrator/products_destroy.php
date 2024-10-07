<?php

use app\models\ReadCart;

//Filtro de ID para transformalo em numero inteiro 
$id_produto = filter_input(INPUT_GET, 'id_produto', FILTER_SANITIZE_NUMBER_INT);

$produtos = new ReadCart;

//Carrega dentro da variavel $user que recebe da tabela de users, para dar um delete utilizando a função update
$products_destroy = $produtos->delete('id_produto', $id_produto);

if($products_destroy) {
    echo "<script>alert('Produto excluido com sucesso!!');</script>";
    header('location: /administrator/consulta_produto');
}
