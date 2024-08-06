<?php

use app\classes\CartProducts;
use app\classes\Cart;

//Objeto concreto que implementa o cartInterface
$cartProducts = new CartProducts();

$products = $cartProducts->products(new Cart);

?>

<h2>Cart | <a href="/cart_products">Home</a></h2>

<hr>
<div id="container">
    <?php if (count($products['products']) <= 0) : ?>
        <h3>Nenhum produto dentro do carrinho de compras</h3>
    <?php else : ?>
        <?php foreach ($products['products'] as $product) : ?>
            <div class="cardProds">
                <div class="productsInsideCart">
                    <img src="./assets/images/<?php echo $product['imagem']; ?>" alt="">
                </div>

                <div class="textProduct">
                    <p>
                        <?php echo $product['nome']; ?>
                    </p>
                    <p>
                        <?php echo $product['descricao']; ?>
                    </p>
                    <p>
                        <span>R$ <?php echo number_format($product['valor'], 2, ',', '.') ?></span>
                    </p>
                    <p>
                        <span>R$ <?php echo number_format($product['subtotal'], 2, ',', '.') ?></span>
                    </p>
                    <form action="/cart_quantidade" method="get">
                        <input type="hidden" name="id_produto" value="<?php echo $product['id_produto']; ?>">
                        <input type="number" name="qty" value="<?php echo $product['qty']; ?>" id="cart-input-qty">
                    </form>
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