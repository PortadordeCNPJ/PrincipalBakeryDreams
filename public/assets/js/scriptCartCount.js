// Função para calcular o valor de um produto específico
function calcValor(id_produto) {
    console.log(id_produto);

    const precoProdutoElemento = document.getElementById("valorCardCart-" + id_produto);
    const precoProdFix = document.getElementById("valorCardCartFix-" + id_produto);
    const inputContagem = document.getElementById("cart-input-qty-" + id_produto);

    if (precoProdutoElemento && precoProdFix && inputContagem) {
        debugger
        const quantidade = parseInt(inputContagem.value);
        const precoUnitario = parseFloat(precoProdFix.value);
        const precoTotalProduto = quantidade * precoUnitario;

        // Atualiza o valor total do produto
        precoProdutoElemento.value = precoTotalProduto.toFixed(2);
    }

    // Calcula o valor total do carrinho
    calcValorTotalCarrinho();
}

// Função para calcular o valor total de todos os produtos no carrinho
function calcValorTotalCarrinho() {
    const produtos = document.querySelectorAll("[id^='valorCardCart-']");
    let valorTotal = 0;

    produtos.forEach((produto) => {
        const preco = parseFloat(produto.value);
        if (!isNaN(preco)) {
            valorTotal += preco;
        }
    });

    // Atualiza o campo de valor total do carrinho
    const valorTotalInput = document.querySelector("#precototal");
    valorTotalInput.value = ("R$ " + valorTotal.toFixed(2)).replace(".", ",");
}

// Função para aumentar a quantidade do produto
function almentarQtd(id_produto) {
    const inputContagem = document.getElementById("cart-input-qty-" + id_produto);
    if (inputContagem) {
        const quantidadeAtual = parseInt(inputContagem.value);
        inputContagem.value = quantidadeAtual + 1;
        calcValor(id_produto);
    }
}

// Função para diminuir a quantidade do produto
function abaixarQtd(id_produto) {
    const inputContagem = document.getElementById("cart-input-qty-" + id_produto);
    if (inputContagem) {
        const quantidadeAtual = parseInt(inputContagem.value);
        if (quantidadeAtual > 1) {
            inputContagem.value = quantidadeAtual - 1;
            calcValor(id_produto);
        }
    }
}
