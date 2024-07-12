<?php
require "../bootstrap.php";

//Teste apenas para dar commit
use app\classes\Routes;
use app\classes\Layout;
use app\classes\Uri;

//Array com todas as rotas que teram dentro do site
$routes = [

    //Para as páginas de dentro da pasta pages
    '/' => 'controllers/index',
    '/sobre' => 'controllers/pages/sobre',
    '/contato' => 'controllers/pages/contato',
    '/snacks' => 'controllers/pages/snacks',
    '/cakes' => 'controllers/pages/cakes',
    '/sweets' => 'controllers/pages/sweets',

    //Para as páginas de dentro da pasta de user
    '/user_create' => 'controllers/user/user_create',
    '/user_store' => 'controllers/user/user_store',
    '/user_quantidade' => 'controllers/user/user_quantidade',
    '/user_edit' => 'controllers/user/user_edit',
    '/user_list' => 'controllers/user/user_list',
    '/user_destroy' => 'controllers/user/user_destroy',
    '/user_update' => 'controllers/user/user_update',
    '/user_login' => 'controllers/user/user_login',
    '/user_logado' => 'controllers/user/user_logado',
    '/user_deslogado' => 'controllers/user/user_deslogado',

    //Para as página de dentro da pasta de cart
    '/cart' => 'controllers/cart/cart',
    '/cart_add' => 'controllers/cart/cart_add',
    '/cart_clear' => 'controllers/cart/cart_clear',
    '/cart_remove' => 'controllers/cart/cart_remove',
    '/cart_products' => 'controllers/cart/cart_products',
    '/cart_quantidade' => 'controllers/cart/cart_quantidade',

    //Para o formulário que cadastra os produtos
    '/cadastro_produtos' => 'controllers/cadProds/cadastro_produtos',
    '/cadastro_store' => 'controllers/cadProds/cadastro_store',
];

//função uri que carrega as páginas dentro do site
$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

//Master layout, carrega todas as views dentro dele
require $layout->master('layout');