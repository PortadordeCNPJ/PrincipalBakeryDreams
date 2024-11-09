<h2>Confirmar compra</h2>

<img class="img-form-1" src="../../assets/img/cake.png">

<form id="form" class="colorful-form" method="post" action="/cadastro_store">

    <div class="form-group">
        <label class="form-label" for="imagem">Tipo da venda:</label>
        <label class="form-label-radio" for="sim">Entrega</label> <input type="radio" name="tipovenda" value="agendamento">
        <label class="form-label-radio" for="nao">Retirada no local</label> <input type="radio" name="tipovenda" value="retirada">
    </div>

    <div class="form-group">
        <label class="form-label" for="imagem">Tipo da Recebimento:</label>
        <label class="form-label-radio" for="sim">Agendamento</label> <input type="radio" name="tiporecebi" value="agendamento">
        <label class="form-label-radio" for="nao">Pronta Entrega</label> <input type="radio" name="tiporecebi" value="confCompra">
    </div>

    <div class="form-group">
        <label class="form-label" for="pagamento">Forma de pagamento:</label>
        <input required="" disabled placeholder="Insira o valor do produto" class="form-input" name="frmpagamento" type="text" inputmode="numeric" value="Pix">
    </div>

    <div class="form-group">
        <label class="form-label" for="valor">Valor:</label>
        <input required="" disabled placeholder="Insira o valor do produto" class="form-input" name="valor" inputmode="numeric" value="<?php echo $valor ?>">
    </div>

    <div class="form-group">
        <label class="form-label" for="quantidade">Quantidade:</label>
        <input required="" disabled placeholder="Insira o valor do produto" class="form-input" name="quantidade" id="CPF" type="text" inputmode="numeric" value="<?php echo $quantidade ?>">
    </div>

    <button class="form-button" type="submit">Cadastrar</button>
</form>