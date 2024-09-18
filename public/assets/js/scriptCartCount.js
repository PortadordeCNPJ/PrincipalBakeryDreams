let form = document.getElementById("prodCart");

function calcValor(id_produto) {
    console.log(id_produto);
    
    var precoProdutos = document.getElementById("valorCardCart-" + id_produto);
    var precoProd = document.getElementById("valorCardCartFix-" + id_produto);
    
    if (precoProdutos.value > 0) {
        // debugger
        var inputcontagem = document.getElementById("cart-input-qty-" + id_produto);
        var preco = parseInt(inputcontagem.value) * precoProd.value;
        precoProdutos.value = preco;
    } else {
        console.log("Ta caindo aqui rapaz");
    }
}

function almentarQtd(id_produto) {

    var inputcontagem = document.getElementById("cart-input-qty-" + id_produto);
    console.log(inputcontagem);
    var ContagemProdutos = inputcontagem.value;
    var novovalor = parseInt(ContagemProdutos) + 1;
    inputcontagem.value = novovalor;

    calcValor(id_produto);
};


function abaixarQtd(id_produto) {
    var inputcontagem = document.getElementById("cart-input-qty-" + id_produto);
    var ContagemProdutos = inputcontagem.value
    if (ContagemProdutos > 1) {
        var novovalor = parseInt(ContagemProdutos) - 1;
        inputcontagem.value = novovalor;

        calcValor(id_produto);
    }
};
