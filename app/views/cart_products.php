<?php

use app\classes\Cart;
use app\models\ReadCart;
use app\models\TipoProduto;

//Chamando o vendor do composer
require '../vendor/autoload.php';

//definindo que a variavel $products recebe todos os produtos do arquivo helpers
// $products = require "../app/helpers/products.php";

$tipoProduto = new TipoProduto;
$id_tipoproduto = $tipoProduto->find('id_tipoproduto', 3);

$cart = new Cart;

$read = new ReadCart;
$products = $read->all('tb_produtos');

//cart dump é uma função para dar um var_dump dentro da funçao cart
// $cart->dump();

$productsInCart = $cart->cart();
?>
<H3>Cart: <?php echo count($productsInCart) ?> | <a href="/cart">Go To Cart</a></H3>

<div class="container containerProdutos">
    <div class="cardTipoProdtudos">
        <a href="/produtos/cakes"><img src="./assets/images/boloImgLink.jpg" class="imgsCards"></a>
        <span>Bolos</span>
    </div>
    <div class="cardTipoProdtudos">
        <a href="/produtos/sweets"><img src="./assets/images/boloImgLink.jpg" class="imgsCards"></a>
        <span> Docinhos</span>
    </div>
    <div class="cardTipoProdtudos">
        <a href="/produtos/snacks"><img src="./assets/images/boloImgLink.jpg" class="imgsCards"></a>
        <span> Salgadinhos</span>
    </div>
</div>