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
    '/add_cart' => 'controllers/add_cart',
];

//função uri que carrega as páginas dentro do site
$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);
//Master layout, carrega todas as views dentro dele
require $layout->master('layout');
