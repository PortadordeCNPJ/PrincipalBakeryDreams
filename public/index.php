<?php
require "../bootstrap.php";

use app\classes\Routes;
use app\classes\Layout;
use app\classes\Uri;

//Array com todas as rotas que teram dentro do site
$routes = [
    '/' => 'controllers/index',
    '/user_create' => 'controllers/user_create',
    '/user_store' => 'controllers/user_store',
    '/user_edit' => 'controllers/user_edit',
    '/user_destroy' => 'controllers/user_destroy',
    '/user_update' => 'controllers/user_update',
    '/cart' => 'controllers/cart',
    '/cart_add' => 'controllers/cart_add',
    '/cart_clear' => 'controllers/cart_clear',
    '/cart_remove' => 'controllers/cart_remove',
    '/cart_products' => 'controllers/cart_products',
    '/cart_quantidade' => 'controllers/cart_quantidade',
    
];

//função uri que carrega as páginas dentro do site
$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);
//Master layout, carrega todas as views dentro dele
require $layout->master('layout');
