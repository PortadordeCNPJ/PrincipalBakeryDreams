<?php

use app\models\ReadCart;

$products = new ReadCart;

if (!empty($_POST) && !empty($_POST['filter_products'])) {

    //if(nome... executa com apenas nomes, outro if(id... executa apenas filtro com ids))

    $search_pruduct = $_POST['filter_products'];

    $produtos = $products->searchProduct($search_pruduct);

    $layout_adm->add('consulta_produto');

} else {
    echo "<script>alert('Nenhum conteúdo no filtro!!');</script>";
    header('location: /consulta_produto');
}




