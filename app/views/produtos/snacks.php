<div id="container">
    <H3>Cart: <?php echo count($productsInCart) ?> | <a href="/cart">Go To Cart</a></H3>
    <ul>
        <!-- Esse código intera na variavel de produtos, mostrando os valores que ela recebe, também transformando $product como
                 a variável que vai receber o valor da variavel $products -->


        <?php foreach ($products as $index => $product) : ?>
            <?php if ($product->id_tipoproduto == 2) : ?>
                <li><?php echo $product->nome; ?> | R$<?php echo number_format($product->valor, 2, ',', '.'); ?>
                    <a href="/cart_add?id_produto=<?php echo $product->id_produto ?>"> | add to cart</a>
                </li>
            <?php endif ?>
        <?php endforeach ?>

    </ul>