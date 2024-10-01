<main>
    <div class="single-item">
        <img src="../assets/images/banners/bannerOficial.png" alt="" height="300">
    </div>
    <div class="d-flex justify-content-center" style="margin: 56px 0 75px 0;">
        <h1 style="font-weight: 700;">Os Produtos de Melhor Qualidade do Mercado Aqui!!</h1>
    </div>

    <div class="row-cakes">
        <div style="padding-left: 65px;padding-top: 50px;/* margin-top: 50px;">
            <h1>Os Melhores Bolos do Mercado!</h1>
            <p style="text-align: justify;">Se você está em busca dos melhores bolos do mercado, não precisa procurar mais!
                Nossos bolos são feitos com ingredientes frescos e de alta qualidade, resultando em sabores irresistíveis que vão encantar seu paladar.
                <br />
                Cada receita é elaborada com carinho e atenção aos detalhes,
                garantindo uma experiência única a cada fatia. Venha experimentar e descubra por que nossos bolos são a escolha favorita de todos!
            </p>
        </div>
        <div class="center" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
            <?php foreach ($products as $index => $product) : ?>
                <?php if ($product->id_tipoproduto == 1) : ?>

                    <div>
                        <h3>
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
                                        <a href="/produtos/cakes"> Visitar Página de Bolos </a>
                                    </p>
                                </div>
                            </div>
                        </h3>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>

    <div class="row-snacks">
        <div style="padding-left: 65px;padding-top: 50px;/* margin-top: 50px;">
            <h1>Os Melhores Bolos do Mercado!</h1>
            <p style="text-align: justify;">Se você está em busca dos melhores bolos do mercado, não precisa procurar mais!
                Nossos bolos são feitos com ingredientes frescos e de alta qualidade, resultando em sabores irresistíveis que vão encantar seu paladar.
                <br />
                Cada receita é elaborada com carinho e atenção aos detalhes,
                garantindo uma experiência única a cada fatia. Venha experimentar e descubra por que nossos bolos são a escolha favorita de todos!
            </p>
        </div>
        <div class="center" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
            <?php foreach ($products as $index => $product) : ?>
                <?php if ($product->id_tipoproduto == 2) : ?>
                    <div>
                        <h3>
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
                                    <a href="/produtos/snacks"> Visitar Página de Bolos </a>
                                    </p>
                                </div>
                            </div>
                        </h3>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>

    <div class="row-sweets">
        <div style="padding-left: 65px;padding-top: 50px;/* margin-top: 50px;">
            <h1>Os Melhores Bolos do Mercado!</h1>
            <p style="text-align: justify;">Se você está em busca dos melhores bolos do mercado, não precisa procurar mais!
                Nossos bolos são feitos com ingredientes frescos e de alta qualidade, resultando em sabores irresistíveis que vão encantar seu paladar.
                <br />
                Cada receita é elaborada com carinho e atenção aos detalhes,
                garantindo uma experiência única a cada fatia. Venha experimentar e descubra por que nossos bolos são a escolha favorita de todos!
            </p>
        </div>
        <div class="center" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
            <?php foreach ($products as $index => $product) : ?>
                <?php if ($product->id_tipoproduto == 3) : ?>
                    <div>
                        <h3>
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
                                    <a href="/produtos/sweets"> Visitar Página de Bolos </a>
                                    </p>
                                </div>
                            </div>
                        </h3>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</main>

<script>
    //Slide dos produtos que vão ficar na página inicial
    $('.center').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    //Usar para poder fazer o banner da página inicial
    $('.single-item').slick();
</script>