<?php
require "../bootstrap.php";

//Teste apenas para dar commit
use app\classes\Routes;
use app\classes\Layout;
use app\classes\Uri;


if (empty($_SESSION) or $_SESSION['tipo'] == 'U') {
    //Array com todas as rotas que teram dentro do site
    $routes = [

        //Home do site
        '/' => 'controllers/index',

        //Para as páginas de produtos
        '/produtos/cakes' => 'controllers/produtos/cakes',
        '/produtos/sweets' => 'controllers/produtos/sweets',
        '/produtos/snacks' => 'controllers/produtos/snacks',
        '/products_update' => 'controllers/produtos/products_update',

        //controllers para fazer o search das páginas
        '/search_user' => 'controllers/search/search_user',

        //Para as páginas de dentro da pasta pages
        '/pages/sobre' => 'controllers/pages/sobre',
        '/pages/contato' => 'controllers/pages/contato',
        '/pages/page_not_found' => 'controllers/pages/page_not_found',
        '/pages/confirmacao' => 'controllers/pages/confirmacao',
        '/pages/esqueceu_senha' => 'controllers/pages/esqueceu_senha',
        '/pages/redefinir_senha' => 'controllers/pages/redefinir_senha',
        '/pages/esqueceu_senha_validation' => 'controllers/pages/esqueceu_senha_validation',
        '/pages/redefinir_senha_validation' => 'controllers/pages/redefinir_senha_validation',


        //Caminho das views do usuário
        '/user_store' => 'controllers/user/user_store',
        '/user_logado' => 'controllers/user/user_logado',
        '/user_update' => 'controllers/user/user_update',
        '/user_deslogado' => 'controllers/user/user_deslogado',
        '/user/user_login' => 'controllers/user/user_login',
        '/user/user_create' => 'controllers/user/user_create',

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
        '/products_destroy' => 'controllers/administrator/products_destroy',
        '/type_product_update' => 'controllers/administrator/type_product_update',
        '/type_product_destroy' => 'controllers/administrator/type_product_destroy',
        '/administrator/admin' => 'controllers/administrator/admin',
        '/administrator/user_list' => 'controllers/administrator/user_list',
        '/administrator/products_edit' => 'controllers/administrator/products_edit',
        '/administrator/consulta_produto' => 'controllers/administrator/consulta_produto',
        '/administrator/cadastro_produtos' => 'controllers/administrator/cadastro_produtos',
        '/administrator/type_product_edit' => 'controllers/administrator/type_product_edit',
        '/administrator/type_product_store' => 'controllers/administrator/type_product_store',
        '/administrator/type_product_create' => 'controllers/administrator/type_product_create',
        '/administrator/type_product_consult' => 'controllers/administrator/type_product_consult',
    ];
} else {
    $routes = [

        //Home da página de ADM
        '/admin' => 'controllers/administrator/admin',

        //Páginas para produtos
        '/products_edit' => 'controllers/administrator/products_edit',
        '/products_update' => 'controllers/produtos/products_update',
        '/products_destroy' => 'controllers/administrator/products_destroy',
        '/consulta_produto' => 'controllers/administrator/consulta_produto',
        '/cadastro_produtos' => 'controllers/administrator/cadastro_produtos',
        '/cadastro_store' => 'controllers/produtos/cadastro_store',

        //Página para tipo de produtos
        '/type_product_edit' => 'controllers/administrator/type_product_edit',
        '/type_product_store' => 'controllers/administrator/type_product_store',
        '/type_product_create' => 'controllers/administrator/type_product_create',
        '/type_product_consult' => 'controllers/administrator/type_product_consult',
        '/type_product_update' => 'controllers/administrator/type_product_update',
        '/type_product_destroy' => 'controllers/administrator/type_product_destroy',

        //Rotas sobre os users
        '/user_edit' => 'controllers/administrator/user_edit',
        '/user_list' => 'controllers/administrator/user_list',
        '/user_destroy' => 'controllers/user/user_destroy',
        '/user_update' => 'controllers/user/user_update',

        //Página de ADM logout
        '/adm_logout' => 'controllers/administrator/adm_logout',

        //controllers para fazer o search das páginas
        '/search_user' => 'controllers/search/search_user',
        '/search_products' => 'controllers/search/search_products',
    ];
}

//função uri que carrega as páginas dentro do site
$uri = Uri::load();

$layout = new Layout;
$layout_adm = new Layout;

require Routes::load($routes, $uri);

//Verifica o tipo de usuário e de acordo com isso, faz o acesso para a página de ADM
if (empty($_SESSION) or $_SESSION['tipo'] == 'U') {
    //Master layout, carrega todas as views dentro dele
    require $layout->master('layout');
} else {
    require $layout_adm->adminPage('layout_adm');
}
