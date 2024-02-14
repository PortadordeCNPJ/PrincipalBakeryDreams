let form = document.getElementById("prod");

const valor4Leites = 40.00;
const valorPChocolateAoLeite = 12.00;
const valorBoloMorango = 40.00;
const valorPNinhoNutella = 12.00;
const valorCanudoDeLeite = 8.00;
const valorBoloChocolate = 40.00;
const valorCanudoNinhoNut = 10.00;

function calcValor(tipoDoce) {
    console.log(tipoDoce);

    var preco4leites = document.querySelector("#preco4leites");
    var precoPChocolateAoLeite = document.querySelector("#precoPChocolateAoLeite");
    var precoBoloMorango = document.querySelector("#precoBoloMorango");
    var precoPNinhoNutella = document.querySelector("#precoPNinhoNutella");
    var precoCanudoDeLeite = document.querySelector("#precoCanudoDeLeite");
    var precoBoloChocolate = document.querySelector("#precoBoloChocolate");
    var precoCanudoNinhoNut = document.querySelector("#precoCanudoNinhoNut")

    switch (tipoDoce) {
        case "4Leites":
            var inputcontagem = document.querySelector("#cont4Leites");
            var preco = parseInt(inputcontagem.value) * valor4Leites;
            preco4leites.value = ("R$ " + preco.toFixed(2)).replace(".", ",");
            break;

        case "pChocolateAoLeite":
            var inputcontagem = document.querySelector("#contPChocolateAoLeite");
            var preco = parseInt(inputcontagem.value) * valorPChocolateAoLeite;
            precoPChocolateAoLeite.value = ("R$ " + preco.toFixed(2)).replace(".", ",");
            break;

        case "boloMorango":
            var inputcontagem = document.querySelector("#contBoloMorango");
            var preco = parseInt(inputcontagem.value) * valorBoloMorango;
            precoBoloMorango.value = ("R$ " + preco.toFixed(2)).replace(".", ",");
            break;

        case "pNinhoNutella":
            var inputcontagem = document.querySelector("#contPNinhoNutella");
            var preco = parseInt(inputcontagem.value) * valorPNinhoNutella;
            precoPNinhoNutella.value = ("R$ " + preco.toFixed(2)).replace(".", ",");
            break;
        
        case "canudoDeLeite":
            var inputcontagem = document.querySelector("#contCanudoDeLeite");
            var preco = parseInt(inputcontagem.value) * valorCanudoDeLeite;
            precoCanudoDeLeite.value = ("R$ " + preco.toFixed(2)).replace(".", ",");
            break;

        case "boloChocolate":
            var inputcontagem = document.querySelector("#contBoloChocolate");
            var preco = parseInt(inputcontagem.value) * valorBoloChocolate;
            precoBoloChocolate.value = ("R$ " + preco.toFixed(2)).replace(".", ",");
            break;

        case "canudoNinhoNut":
            var inputcontagem = document.querySelector("#contCanudoNinhoNut");
            var preco = parseInt(inputcontagem.value) * valorCanudoNinhoNut;
            precoCanudoNinhoNut.value = ("R$ " + preco.toFixed(2)).replace(".", ",");
            break;

        default:
            break;
    }
}



/* Colocar uma função como a de valor logo abaixo, para nao preicsar sempre utilizar o toFixed */

function converterStringParaFloat(valor) {
    // Remove o símbolo "R$" e quaisquer espaços em branco
    valor = valor.replace("R$", "").trim();

    // Substitui a vírgula por um ponto, se necessário
    valor = valor.replace(",", ".");

    // Converte a string para um número de ponto flutuante
    const resultado = parseFloat(valor);

    return resultado;
}

function almentarKg(tipoDoce) {
    console.log(tipoDoce);
    switch (tipoDoce) {
        case "4Leites":
            var inputcontagem = document.querySelector("#cont4Leites");
            var Contagem4Leites = inputcontagem.value
            var novovalor = parseInt(Contagem4Leites) + 1;
            inputcontagem.value = novovalor;
            break;

        case "pChocolateAoLeite":
            var inputcontagem1 = document.querySelector("#contPChocolateAoLeite");
            var ContagempChocolateAoLeite = inputcontagem1.value
            var novovalor1 = parseInt(ContagempChocolateAoLeite) + 1;
            inputcontagem1.value = novovalor1;
            break;

        case "boloMorango":
            var inputcontagem2 = document.querySelector("#contBoloMorango");
            var ContagemBoloMorango = inputcontagem2.value
            var novovalor2 = parseInt(ContagemBoloMorango) + 1;
            inputcontagem2.value = novovalor2;
            break;

        case "pNinhoNutella":
            var inputcontagem3 = document.querySelector("#contPNinhoNutella");
            var ContagemPNinhoNutella = inputcontagem3.value
            var novovalor3 = parseInt(ContagemPNinhoNutella) + 1;
            inputcontagem3.value = novovalor3;
            break;

        case "canudoDeLeite":
            var inputcontagem4 = document.querySelector("#contCanudoDeLeite");
            var ContagemCanudoDeLeite = inputcontagem4.value
            var novovalor4 = parseInt(ContagemCanudoDeLeite) + 1;
            inputcontagem4.value = novovalor4;
            break;

        case "boloChocolate":
            var inputcontagem5 = document.querySelector("#contBoloChocolate");
            var ContagemBoloChocolate = inputcontagem5.value
            var novovalor5 = parseInt(ContagemBoloChocolate) + 1;
            inputcontagem5.value = novovalor5;
            break;

        case "canudoNinhoNut":
            var inputcontagem6 = document.querySelector("#contCanudoNinhoNut");
            var ContagemCanudoNinhoNut = inputcontagem6.value
            var novovalor6 = parseInt(ContagemCanudoNinhoNut) + 1;
            inputcontagem6.value = novovalor6;
            break;

        default:
            break;

    }

    calcValor(tipoDoce)
}

function abaixarKg(tipoDoce) {
    console.log(tipoDoce);

    switch (tipoDoce) {

        case "4Leites":
            var inputcontagem = document.querySelector("#cont4Leites");
            var Contagem4Leites = inputcontagem.value
            if (Contagem4Leites > 0) {
                var novovalor = parseInt(Contagem4Leites) - 1;
                inputcontagem.value = novovalor;
            }
            break;

        case "pChocolateAoLeite":
            var inputcontagem1 = document.querySelector("#contPChocolateAoLeite");
            var ContagemPChocolateAoLeite = inputcontagem1.value
            if (ContagemPChocolateAoLeite > 0) {
                var novovalor1 = parseInt(ContagemPChocolateAoLeite) - 1;
                inputcontagem1.value = novovalor1;
            }
            break;

        case "boloMorango":
            var inputcontagem2 = document.querySelector("#contBoloMorango");
            var ContagemBoloMorango = inputcontagem2.value
            if (ContagemBoloMorango > 0) {
                var novovalor2 = parseInt(ContagemBoloMorango) - 1;
                inputcontagem2.value = novovalor2;
            }
            break;

        case "pNinhoNutella":
            var inputcontagem3 = document.querySelector("#contPNinhoNutella");
            var ContagemPNinhoNutella = inputcontagem3.value
            if (ContagemPNinhoNutella > 0) {
                var novovalor3 = parseInt(ContagemPNinhoNutella) - 1;
                inputcontagem3.value = novovalor3;
            }
            break;

        case "canudoDeLeite":
            var inputcontagem4 = document.querySelector("#contCanudoDeLeite");
            var ContagemCanudoDeLeite = inputcontagem4.value
            if (ContagemCanudoDeLeite > 0) {
                var novovalor4 = parseInt(ContagemCanudoDeLeite) - 1;
                inputcontagem4.value = novovalor4;
            }
            break;

        case "boloChocolate":
            var inputcontagem5 = document.querySelector("#contBoloChocolate");
            var ContagemBoloChocolate = inputcontagem5.value
            if (ContagemBoloChocolate > 0) {
                var novovalor5 = parseInt(ContagemBoloChocolate) - 1;
                inputcontagem5.value = novovalor5;
            }
            break;

        case "canudoNinhoNut":
            var inputcontagem6 = document.querySelector("#contCanudoNinhoNut");
            var ContagemCanudoNinhoNut = inputcontagem6.value
            if (ContagemCanudoNinhoNut > 0) {
                var novovalor6 = parseInt(ContagemCanudoNinhoNut) - 1;
                inputcontagem6.value = novovalor6;
            }
            break;

        default:
            break;
    }

    calcValor(tipoDoce)

}


