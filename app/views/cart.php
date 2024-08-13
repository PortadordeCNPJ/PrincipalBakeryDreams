<?php

use app\classes\CartProducts;
use app\classes\Cart;

//Objeto concreto que implementa o cartInterface
$cartProducts = new CartProducts();

$products = $cartProducts->products(new Cart);

?>

<script src="../../assets/js/scriptCartCount.js"></script>

<h2>Cart | <a href="/cart_products">Home</a></h2>



<div class="card">
    <div class="texto-card">
        <div class="btn" onclick="abaixarKg('canudoNinhoNut')">-</div>
        <input class="count" id="contCanudoNinhoNut" readonly value="0" />
        <div class="btn" onclick="almentarKg('canudoNinhoNut')">+</div>
    </div>
    <div class="prices">
        <button type="button" class="form-button" name="cmpBoloDe4Leites" onclick="adicionarAoCarrinho(8)">Mandar ao carrinho</button>
        <input class="amount" id="precoCanudoNinhoNut" readonly value="R$0,00" />
    </div>
</div>


<hr>
<div id="container">
    <?php if (count($products['products']) <= 0) : ?>
        <h3>Nenhum produto dentro do carrinho de compras</h3>
    <?php else : ?>
        <?php foreach ($products['products'] as $product) : ?>
            <div class="cardProds">
                <div class="productsInsideCart">
                    <img src="./assets/images/<?php echo $product['imagem']; ?>" class="imgsCards" alt="">
                </div>

                <div class="textProduct">
                    <p>
                        <?php echo $product['nome']; ?>
                    </p>
                    <p>
                        <?php echo $product['descricao']; ?>
                    </p>
                    <p>
                        <input id="subtotalCardCart" value="R$ <?php echo number_format($product['subtotal'], 2, ',', '.') ?>"></input>
                    </p>
                    <!-- <form action="/cart_quantidade" method="get" id="prodCart"> -->
                    <input type="hidden" name="id_produto" value="<?php echo $product['id_produto']; ?>">
                    <div class="texto-card">
                        <div class="btn-count" onclick="abaixarKg('productInCart')">-</div>
                        <input class="count" name="qty" id="cart-input-qty" readonly value="<?php echo $product['qty']; ?>" />
                        <div class="btn-count" onclick="almentarKg('productInCart')">+</div>
                    </div>
                    <!-- </form> -->
                    <a href="/cart_remove?id_produto=<?php echo $product['id_produto'] ?>" id="cart-remove">Remove</a>
                </div>
            </div>
        <?php endforeach ?>
        <div id="cart-total-clear">
            <span id="cart-total">
                Total: R$ <?php echo number_format($products['total'], 2, ',', '.') ?>
            </span>


            <span id="cart-clear">
                <a href="/cart_clear">Clear Cart</a>
            </span>
        </div>
    <?php endif ?>
</div>