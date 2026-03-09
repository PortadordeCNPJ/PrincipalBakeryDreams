<?php

use app\models\User;

$user = new User;


if ($_SESSION['email'] == "") {
    echo "<script>alert('É preciso fazer login antes de efetuar uma compra!');</script>";
    echo "<script>location.href='/user/user_login';</script>";
} else {
    $valor = $_POST['preco-total'];
    $quantidade = $_POST['quantidade'];
    $layout->add('cart/confirm_purchase_finish');
}
// echo $variavel = $_POST['quantidade'];

//  if (informações > 0) {

//     layout == confirm_buy_itens
//  }

// echo "----";
// echo $_POST['valor'];

// $layout->add('cart/confirm_purchase');
