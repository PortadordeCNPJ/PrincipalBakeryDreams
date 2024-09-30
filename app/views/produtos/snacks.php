<div class="d-flex justify-content-center" style="margin: 56px 0 75px 0;">
    <h1>Os Melhores e Mais Gostosos Salgadinhos Aqui!!</h1>
</div>
<div class="containerProds">
    <!-- Esse código intera na variavel de produtos, mostrando os valores que ela recebe, também transformando $product como
                 a variável que vai receber o valor da variavel $products -->
    <?php foreach ($products as $index => $product) : ?>
        <?php if ($product->id_tipoproduto == 2) : ?>
            <div class="cardProds">
                <div class="productsInsideCart">
                    <img src="../assets/images/<?php echo $product->imagem; ?>" class="imgsCardProduct" alt="">
                </div>
                <div class="textProduct">
                    <p>
                        <?php echo $product->nome; ?>
                    </p>
                    <p>
                        <?php echo $product->descricao; ?>
                    </p>
                    <p>
                        <span>R$<?php echo number_format($product->valor, 2, ',', '.'); ?></span>
                        <a href="/cart_add?id_produto=<?php echo $product->id_produto ?>">Adicionar <i class='fa-solid fa-cart-shopping'></i></a>
                    </p>
                </div>
            </div>
        <?php endif ?>
    <?php endforeach ?>
</div>