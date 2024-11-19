<?php

use app\models\VendaItens;

$user = new VendaItens;

$user->finalizarVenda();

$userOla = $user->finalizarCompra();

if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    // Aqui você pode adicionar o código para finalizar a compra, como inserir os dados no banco de dados, gerar um pedido, etc.

    // Limpa o carrinho após a finalização
    unset($_SESSION['cart']);
    $compra_finalizada = true;
} else {
    $compra_finalizada = false;
}

$layout->add('cart/finalizar_compra');
