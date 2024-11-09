<?php

use app\models\User;

$user = new User;

$id_usuario = $_SESSION["id_usuario"];

$userEncontrado = $user->find('id_usuario', $id_usuario);
$userEndereco = $userEncontrado->nmcasa;

if ($userEndereco > 0) {
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $layout->add('cart/confirm_purchase_finish');
} else {
    $layout->add('cart/confirm_purchase');
}

// echo $variavel = $_POST['quantidade'];

//  if (informações > 0) {

//     layout == confirm_buy_itens
//  }

// echo "----";
// echo $_POST['valor'];

// $layout->add('cart/confirm_purchase');
