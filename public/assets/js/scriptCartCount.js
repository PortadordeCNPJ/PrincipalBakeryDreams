let form = document.getElementById("prodCart");

function calcValor(tipoProduto) {
    console.log(tipoProduto);

    var precoProdutos = document.getElementById("subtotalCardCart");
    
    var inputcontagem = document.getElementById("cart-input-qty");
    var precoProdutosInCard = parseInt(inputcontagem.value) * precoProdutos;
    
}

function almentarKg(tipoProduto) {

    var inputcontagem = document.getElementById("cart-input-qty");
    console.log(inputcontagem);
    var ContagemProdutos = inputcontagem.value;
    var novovalor = parseInt(ContagemProdutos) + 1;
    inputcontagem.value = novovalor;

    calcValor(tipoProduto);
}
