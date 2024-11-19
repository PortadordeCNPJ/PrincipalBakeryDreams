<div class="carrinho-container">
    <?php if ($compra_finalizada): ?>
        <div style="display: flex;justify-content: center;">
            <img src="../../assets/images/pix.jpeg" width="200" alt="">
        </div>
        <h2 class="carrinho-titulo">Compra Finalizada</h2>
        <p>
            00020126490014br.gov.bcb.pix0114+55459913498890209<br />Guilherme5204000053039865406120.005802BR5925GUILHERME DE SOUZA MULLER6008CASCAVEL62290525kGnpR8PccFeWKrzOe50aek7j763044FF4
        </p>
        <p>Obrigado pela compra! Seu pedido foi finalizado com sucesso.</p>
        <a href="/" class="btn-finalizar-compra">Voltar à Página Inicial</a>
        <?php else: ?>
        <h2 class="carrinho-titulo">Carrinho Vazio</h2>
        <p>Seu carrinho está vazio. Adicione itens ao carrinho antes de finalizar a compra.</p>
        <a href="/" class="btn-finalizar-compra">Voltar para Início</a>
    <?php endif; ?>
</div>