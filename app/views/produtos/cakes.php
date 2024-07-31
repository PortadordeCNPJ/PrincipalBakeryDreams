<?php

use app\classes\Cart;
use app\models\ReadCart;
use app\models\TipoProduto;
//definindo que a variavel $products recebe todos os produtos do arquivo helpers
// $products = require "../app/helpers/products.php";

$tipoProduto = new TipoProduto;
$tipProducts = $tipoProduto->all('tb_tipoprodutos');

$cart = new Cart;

$read = new ReadCart;
$products = $read->all('tb_produtos');

// $pageBolos = "SELECT id_tipoproduto, nome FROM $tipoProdutos ORDER BY id_tipoproduto";

//cart dump é uma função para dar um var_dump dentro da funçao cart
// $cart->dump();

$productsInCart = $cart->cart();
?>

<div id="container">
    <H3>Cart: <?php echo count($productsInCart) ?> | <a href="/cart">Go To Cart</a></H3>
    <ul>
        <!-- Esse código intera na variavel de produtos, mostrando os valores que ela recebe, também transformando $product como
                 a variável que vai receber o valor da variavel $products -->

        <?php foreach ($tipProducts as $index => $tipProduct) : ?>
            <?php foreach ($products as $index => $product) : ?>
                <li><?php echo $product->nome; ?> | R$<?php echo number_format($product->valor, 2, ',', '.'); ?>
                    <a href="/cart_add?id_produto=<?php echo $product->id_produto ?>"> | add to cart</a>
                </li>
            <?php endforeach ?>
        <?php endforeach ?>
    </ul>