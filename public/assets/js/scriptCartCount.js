let form = document.getElementById("prodCart");

function calcValor(id_produto) {
    console.log(id_produto);
    
    var precoProdutos = document.getElementById("valorCardCart-" + id_produto);

    if (precoProdutos.value > 0) {
        var inputcontagem = document.getElementById("cart-input-qty-" + id_produto);
        var preco = parseInt(inputcontagem.value) * precoProdutos.value;
        precoProdutos.value = preco;
    } else {
        console.log("Ta caindo aqui rapaz");
    }
}

function almentarKg(id_produto) {

    var inputcontagem = document.getElementById("cart-input-qty-" + id_produto);
    console.log(inputcontagem);
    var ContagemProdutos = inputcontagem.value;
    var novovalor = parseInt(ContagemProdutos) + 1;
    inputcontagem.value = novovalor;

    calcValor(id_produto);
}
