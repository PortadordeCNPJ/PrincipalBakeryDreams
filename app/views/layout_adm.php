<?php

use app\classes\Cart;
use app\models\ReadCart;

$cart = new Cart;

$read = new ReadCart;
$products = $read->all('tb_produtos');

//cart dump é uma função para dar um var_dump dentro da funçao cart
// $cart->dump();

$productsInCart = $cart->cart();

// $userNaoLogado = $_SESSION['tipo'] = "";

// if ($userNaoLogado) {
//     $_SESSION['tipo'] = "U";
// }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="../../assets/js/bootstrap.js" type=""></script>
    <script src="../../assets/js/jquery.js" type=""></script>
    <script src="../../assets/js/bootstrap.js" crossorigin="anonymous"></script>
    <!-- Offiline -->

    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/v4-shims.min.css" integrity="sha512-veZLkufL0qjcloU3GqyNh2cOqjduXLgni09I72g783Fyudzxcm2A7lxj6Qxn4YrnhJdD8rB9vkR+rOtfF4TZ1g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="../../assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/slick-theme.css" />


    <title>Views</title>
</head>

<body>

    <!-- <div class=" cabecalho"> -->
    <nav class="navbar navbar-expand-lg header-pg-princ navbar-custom">
        <div class="container">
            <div>
                <button class="comic-button-adm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <i class="fa-solid fa-list"></i>
                </button>

                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Bem vindo ao painel de Administrador!! <strong><?php echo $_SESSION['nome']; ?></strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul>
                            <li class="comic-button-adm">
                                <?php echo menuItemAdm("/admin", "Página Inicial"); ?>
                            </li>
                            <li class="comic-button-adm">
                                <?php echo menuItemAdm("/user_list", "Lista de Usuários"); ?>
                            </li>
                            <li class="comic-button-adm">
                                <?php echo menuItemAdm("/cadastro_produtos", "Cadastrar Produto"); ?>
                            </li>
                            <li class="comic-button-adm">
                                <?php echo menuItemAdm("/consulta_produto", "Lista de Produtos"); ?>
                            </li>
                            <li class="nav-item dropdown comic-button-adm" style="z-index: 1;">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-regular fa-user"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <?php
                                    if (!empty($_SESSION)) {
                                        echo "<label for=''>Nome:</label>
                                <input type='text' disabled class='form-control' name='email' placeholder='Digite seu email' value='" . $_SESSION["nome"] . "'>
                                <li><a class='dropdown-item' href='/adm_logout'>Sair</a></li>";
                                    } else {
                                    ?>
                                        <li><a class="dropdown-item" href="/user/user_login">Login</a></li>
                                        <li><a class="dropdown-item" href="/user/user_create">Cadastro</a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navbar-brand me-auto d-flex">
                <a href="#">
                    <img src="../../assets/images/logoSite.png" alt="" width="200" height="150">
                </a>
            </div>
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- </div> -->
    <!-- Aqui irao carregar as views de dentro do controller-->
    <?php
    require $layout_adm->loadAdmPage();
    ?>
    </div>
</body>

</html>