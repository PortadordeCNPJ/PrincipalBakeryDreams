<?php
require "../bootstrap.php";

//Teste apenas para dar commit
use app\classes\Routes;
use app\classes\Layout;
use app\classes\Uri;

//Array com todas as rotas que teram dentro do site
$routes = [

    //Home do site
    '/' => 'controllers/index',

    //Para as páginas de produtos
    '/produtos/snacks' => 'controllers/produtos/snacks',
    '/produtos/cakes' => 'controllers/produtos/cakes',
    '/produtos/sweets' => 'controllers/produtos/sweets',
    '/products_update' => 'controllers/produtos/products_update',


    //Para as páginas de dentro da pasta pages
    '/pages/sobre' => 'controllers/pages/sobre',
    '/pages/contato' => 'controllers/pages/contato',
    '/pages/page_not_found' => 'controllers/pages/page_not_found',


    //Caminho das views do usuário
    '/user/user_edit' => 'controllers/user/user_edit',
    '/user/user_login' => 'controllers/user/user_login',
    '/user/user_create' => 'controllers/user/user_create',
    '/user_store' => 'controllers/user/user_store',
    '/user_logado' => 'controllers/user/user_logado',
    '/user_update' => 'controllers/user/user_update',
    '/user_destroy' => 'controllers/user/user_destroy',
    '/user_deslogado' => 'controllers/user/user_deslogado',

    //Para as página de dentro da pasta de cart
    '/cart' => 'controllers/cart/cart',
    '/cart_add' => 'controllers/cart/cart_add',
    '/cart_clear' => 'controllers/cart/cart_clear',
    '/cart_remove' => 'controllers/cart/cart_remove',
    '/cart_products' => 'controllers/cart/cart_products',
    '/cart_quantidade' => 'controllers/cart/cart_quantidade',

    //Para o formulário que cadastra os produtos
    '/cadastro_store' => 'controllers/produtos/cadastro_store',

    //Admin Pages
    '/administrator/admin' => 'controllers/administrator/admin',
    '/administrator/user_list' => 'controllers/administrator/user_list',
    '/administrator/cadastro_produtos' => 'controllers/administrator/cadastro_produtos',
    '/administrator/consulta_produto' => 'controllers/administrator/consulta_produto',
    '/administrator/products_edit' => 'controllers/administrator/products_edit',
    '/administrator/type_product_create' => 'controllers/administrator/type_product_create',
    '/administrator/type_product_store' => 'controllers/administrator/type_product_store',
    '/products_destroy' => 'controllers/administrator/products_destroy',
    '/type_product_update' => 'controllers/administrator/type_product_update',
    '/administrator/type_product_edit' => 'controllers/administrator/type_product_edit',
    '/administrator/type_product_consult' => 'controllers/administrator/type_product_consult'
];

//função uri que carrega as páginas dentro do site
$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

//Master layout, carrega todas as views dentro dele
require $layout->master('layout');
