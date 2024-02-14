function adicionarAoCarrinho(id) {
    let data = null;

    //switch recebe "id" para entrar em cada "case". Esses cases recebem o ID de cada 
    switch (id) {
        case 3:
            var boloDe4Leites = $('#bolo4Leites').val();
            var cont4Leites = $('#cont4Leites').val();

            data = {
                id: boloDe4Leites,
                qnt: cont4Leites
            }
            break;

        case 4:
            var boloPChocolateAoLeite = $('#boloPChocolateAoLeite').val();
            var contPChocolateAoLeite = $('#contPChocolateAoLeite').val();

            data = {
                id: boloPChocolateAoLeite,
                qnt: contPChocolateAoLeite
            }
            break;

        case 2:
            var boloDeMorango = $('#boloDeMorango').val();
            var contBoloMorango = $('#contBoloMorango').val();

            data = {
                id: boloDeMorango,
                qnt: contBoloMorango
            }
            break;

        case 5:
            var bolodePNinhoNutella = $('#bolodePNinhoNutella').val();
            var contPNinhoNutella = $('#contPNinhoNutella').val();

            data = {
                id: bolodePNinhoNutella,
                qnt: contPNinhoNutella
            }
            break;

        case 7:
            var canudoDoceDeLeite = $('#canudoDoceDeLeite').val();
            var contCanudoDeLeite = $('#contCanudoDeLeite').val();

            data = {
                id: canudoDoceDeLeite,
                qnt: contCanudoDeLeite
            }
            break;

        case 1:
            var boloDeChocolate = $('#boloDeChocolate').val();
            var contBoloChocolate = $('#contBoloChocolate').val();

            data = {
                id: boloDeChocolate,
                qnt: contBoloChocolate
            }
            break;

        case 8:
            var canudoNinhoNutella = $('#canudoNinhoNutella').val();
            var contCanudoNinhoNut = $('#contCanudoNinhoNut').val();

            data = {
                id: canudoNinhoNutella,
                qnt: contCanudoNinhoNut
            }
            break;

        default:
            break;
    }

    if (data != null) {
        $.ajax({
            url: 'pages/salvar-carrinho.php?funcao=salvarCarrinho',
            method: 'POST',
            data: data,
            dataType: 'json'
        }).done(function (result) {
            console.log(result);
        });
    }

    alert("PRODUTO ENVIADO AO CARRINHO!!");
}