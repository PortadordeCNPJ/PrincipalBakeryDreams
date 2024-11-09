<h2>Confirmar compra</h2>

<img class="img-form-1" src="../../assets/img/cake.png">

<form id="form" class="colorful-form" method="post" action="/cadastro_store">

<div class="form-group">
        <label class="form-label" for="produto">Tipo de venda:</label>

        <select name="tipovenda">
            <option selected value="agendamento">Agendar compra</option>
            <option selected value="confCompra">Finalizar compra</option>
        </select>
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