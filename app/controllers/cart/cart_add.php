<?php

require '../vendor/autoload.php';

use app\classes\Cart;

//Filtra as informações que são enviadas pela URL com o GET. Usa o filtro para que ID receba apenas o numero do produto
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//cart agora recebe os valores da Classe Cart Interface
$cart = new Cart;
$cart->add($id);

$cart->dump();

header('Location: /cart_products');

//Confere se realmente está passando produtos no carrinho