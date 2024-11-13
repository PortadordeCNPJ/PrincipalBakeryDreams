<?php

use app\classes\CartProducts;
use app\classes\Cart;

//Objeto concreto que implementa o cartInterface
$cartProducts = new CartProducts();

$products = $cartProducts->products(new Cart);

?>

<script src="../../assets/js/scriptCartCount.js"></script>

<header>
    <h1><i class="fas fa-shopping-cart"></i> Carrinho de Compras</h1>
    <a href="/cart_products" class="continue-shopping"><i class="fas fa-arrow-left"></i> Continuar Comprando</a>
</header>
<?php if (count($products['products']) <= 0) : ?>
    <h1 style="text-align: center; margin-top: 8%;">Nenhum produto dentro do carrinho de compras</h1>
<?php else : ?>
    <main class="cart-container">
        <form action="/cart/confirm_purchase" method="POST">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Total</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody>


                    <?php foreach ($products['products'] as $product) : ?>
                        <tr>
                            <td><img src="./assets/images/<?php echo $product['imagem']; ?>" class="imgsCardProduct" alt=""> <?php echo $product['nome']; ?></td>
                            <td>
                                <div class="texto-card">
                                    <div class="btn-count" onclick="abaixarQtd(<?php echo $product['id_produto']; ?>)">-</div>
                                    <input class="count" name="quantidade" id="cart-input-qty-<?php echo $product['id_produto']; ?>" readonly value="<?php echo $product['qty']; ?>" />
                                    <div class="btn-count" onclick="almentarQtd(<?php echo $product['id_produto']; ?>)">+</div>
                                </div>
                            </td>
                            <td>
                                <?php echo "R$" . number_format($product['valor'], 2, ',', '.'); ?>
                            </td>
                            <td><input style="width: 80px;" id="valorCardCart-<?php echo $product['id_produto']; ?>" name="valor" value="<?php echo $product['valor']; ?>"></td>
                            <td style="text-align: center;"><a href="/cart_remove?id_produto=<?php echo $product['id_produto'] ?>" id="cart-remove" class="remove-btn"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>

            <div class="cart-summary">
                <h2>Resumo do Pedido</h2>
                <p><a href="/cart_clear">Clear Cart</a></p>
                <p>Entrega: <span>R$ 10,00</span></p>
                <p><strong>Total: <span>R$ <?php echo number_format($products['total'], 2, ',', '.') ?></span></strong></p>
                <button class="checkout-btn"><i class="fas fa-credit-card"></i> Finalizar Compra</button>
            </div>
        </form>
    <?php endif ?>
    </main>