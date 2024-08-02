<?php 

use app\classes\Cart;
use app\models\ReadCart;

//Chamando o vendor do composer
require '../vendor/autoload.php';

//definindo que a variavel $products recebe todos os produtos do arquivo helpers
// $products = require "../app/helpers/products.php";

$cart = new Cart;

$read = new ReadCart;
$products = $read->all('tb_produtos');

//cart dump é uma função para dar um var_dump dentro da funçao cart
// $cart->dump();

$productsInCart = $cart->cart();

$layout->add('produtos/cakes');