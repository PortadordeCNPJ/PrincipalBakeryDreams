<?php

use app\classes\Cart;
use app\models\ReadCart;

if (empty($_SESSION)) {
    $_SESSION['tipo'] = 'U';
    $_SESSION['nome'] = "U";
}

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

// phpinfo();
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
            <div class="navbar-brand me-auto d-flex">
                <a href="#">
                    <img src="../../assets/images/logoSite.png" alt="" width="200" height="150">
                </a>
            </div>
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="comic-button">
                        <?php echo menuItem("/cart_products", "Produtos"); ?>
                    </li>
                    <li class="comic-button d-flex">
                        <?php echo menuItem("/cart", "<i class='fa-solid fa-cart-shopping'></i>"); ?>
                        <div style="color: #000; cursor: pointer;">
                            <?php echo count($productsInCart); ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown comic-button" style="z-index: 1;">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <?php
                            if ($_SESSION['nome'] == "U") {
                            ?>
                                <li><a class="dropdown-item" href="/user/user_login">Login</a></li>
                                <li><a class="dropdown-item" href="/user/user_create">Cadastro</a></li>
                            <?php
                            } else {
                                echo "<label for=''>Email</label>
                            <input type='text' disabled class='form-control' name='email' placeholder='Digite seu email' value='" . $_SESSION["nome"] . "'>
                            <li><a class='dropdown-item' href='/user/user_edit'>Informações Pessoais</a></li>
                            <li><a class='dropdown-item' href='/user_deslogado'>Sair</a></li>";
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <form class="d-flex form-search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <nav class="navbar navbar-down">
        <ul class="navbar-nav navbar-down-ul">
            <li class="nav-item-down"> <?php echo menuItem("/", "Inicio <i class='fa-solid fa-chevron-down'></i>"); ?> </li>
            <li class="nav-item-down"> <?php echo menuItem("/pages/sobre", "Sobre Nós <i class='fa-solid fa-chevron-down'></i>"); ?> </li>
            <li class="nav-item-down"> <?php echo menuItem("/pages/contato", "Contato <i class='fa-solid fa-chevron-down'></i>"); ?> </li>
            <?php
            if (!empty($_SESSION) && $_SESSION['tipo'] == 'A' && empty($_SESSION['tipo'] == '')) {
                echo "<li class='nav-item-down'>" . menuItem("/administrator/admin", "Admin <i class='fa-solid fa-chevron-down'></i>");
                "</li>";
            }
            ?>
        </ul>
    </nav>
    <!-- </div> -->
    <!-- Aqui irao carregar as views de dentro do controller-->
    <div class="wrapper">
        <div class="content">
            <?php
            require $layout->load();
            ?>
        </div>
        <footer class="footer">
            <div class="footer-social">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" aria-label="X (Twitter)"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
            </div>

            <div class="footer-logo">
                <h2>Bakery Dreams</h2>
                <p>&copy; 2024 Bakery Dreams - Confeitaria dos seus sonhos</p>
            </div>

            <div class="footer-links">
                <a href="#">Termos Legais</a>
                <a href="#">Política de Privacidade</a>
                <a href="#">Segurança</a>
                <a href="#">Acessibilidade</a>
                <a href="#">Gerenciar Cookies</a>
            </div>
        </footer>
    </div>
</body>

</html>