<?php

use app\models\User;
use app\models\VendaItens;

$user = new VendaItens;
$userFind = new User;


//Adicionar mais formas de pagamento, como o cartão, mesmo que sendo possível usar
//Quando usar o calendário, fazer as varificações de data, para ver se o cliente não adicionou uma data inválida.
if ($_POST["tipovenda"] == "entrega") {
    $id_usuario = $_SESSION["id_usuario"];

    $userEncontrado = $userFind->find('id_usuario', $id_usuario);
    $userEndereco = $userEncontrado->rua;

    if ($userEndereco !== "") {
        $valor = $_POST['preco-total'];
        $quantidade = $_POST['quantidade'];
        $layout->add('cart/finalizar_compra');
    } else {
        $layout->add('cart/confirm_purchase');
    }
} else {
    //Arrumar essa bosta aqui, tudo ganbiarreira veia

    
}
