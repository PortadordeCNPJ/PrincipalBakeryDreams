<?php

use app\classes\CartProducts;
use app\classes\Cart;

//Objeto concreto que implementa o cartInterface
$cartProducts = new CartProducts();

$products = $cartProducts->products(new Cart);
?>

<h2>Cart | <a href="/cart_products">Home</a></h2>

<div id="container">
    <?php if (count($products['products']) <= 0) : ?>
        <h3>Nenhum produto dentro do carrinho de compras</h3>
    <?php else : ?>
        <form action="/cart/confirm_purchase" method="POST">
            <?php foreach ($products['products'] as $product) : ?>
                <div class="cardProds">
                    <div class="productsInsideCart">
                        <img src="./assets/images/<?php echo $product['imagem']; ?>" class="imgsCardProduct" alt="">
                    </div>

                    <div class="textProduct">
                        <p>
                            <?php echo $product['nome']; ?>
                        </p>
                        <p>
                            <?php echo $product['descricao']; ?>
                        </p>

                        <!-- <p>
                        <input id="subtotalCardCart" value="<?php //echo $product['subtotal'];
                                                            ?>"></input>
                    </p> -->
                        <!-- <form action="/cart_quantidade" method="get" id="prodCart"> -->
                        <input type="hidden" name="id_produto" value="<?php echo $product['id_produto']; ?>">
                        <div class="texto-card">
                            <div class="btn-count" onclick="abaixarQtd(<?php echo $product['id_produto']; ?>)">-</div>
                            <input class="count" name="qty" id="cart-input-qty-<?php echo $product['id_produto']; ?>" readonly value="<?php echo $product['qty']; ?>" />
                            <div class="btn-count" onclick="almentarQtd(<?php echo $product['id_produto']; ?>)">+</div>
                        </div>
                        <p>
                            <input type="hidden" id="valorCardCartFix-<?php echo $product['id_produto']; ?>" value="<?php echo $product['valor']; ?>">
                            <input id="valorCardCart-<?php echo $product['id_produto']; ?>" value="<?php echo $product['valor']; ?>">
                            <!-- <input id="valorCardCart-<?php echo $product['id_produto']; ?>" value="R$<?php echo number_format($product['valor'], 2, ',', '.'); ?>"> -->
                        </p>
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
            <button type="submit">Confirmar compra</button>
        </form>
    <?php endif ?>
</div>
