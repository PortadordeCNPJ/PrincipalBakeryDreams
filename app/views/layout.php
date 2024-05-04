<?php session_start(); ?>

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

    <title>Views</title>
</head>

<body>
    <!-- <div class=" cabecalho"> -->
    <nav class="navbar navbar-expand-lg header-pg-princ navbar-custom">
        <div class="container">
            <div class="navbar-brand me-auto d-flex">
                <a href="#">
                    <img src="./assets/img/logo.png" alt="" width="30" height="24">
                </a>
            </div>
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="comic-button">
                        <?php echo menuItem("/", "Inicio"); ?>
                    </li>
                    <li class="comic-button">
                        <?php echo menuItem("/cart_products", "Produtos"); ?>
                    </li>
                    <li class="comic-button">
                        <?php echo menuItem("/cart", "<i class='fa-solid fa-cart-shopping'></i>"); ?>
                    </li>
                    <li class="nav-item dropdown comic-button">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/login">Login</a></li>
                            <li><a class="dropdown-item" href="/user_create">Cadastro</a></li>
                            <li><a class="dropdown-item" href="/sair">Sair</a></li>
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
            <li class="nav-item-down"> <h2> <?php echo menuItem("/", "Inicio <i class='fa-solid fa-chevron-down'></i>"); ?> </h2> </li>
            <li class="nav-item-down"><a href="#"> Sobre nós <i class="fa-solid fa-chevron-down"></i> </a></li>
            <li class="nav-item-down"><a href="#"> Contato <i class="fa-solid fa-chevron-down"></i> </a></li>
            <li class="nav-item-down"><a href="#">  <i class="fa-solid fa-chevron-down"></i> </a></li>
        </ul>
    </nav>
    <!-- </div> -->
    <!-- Aqui irao carregar as views de dentro do controller-->
    <?php require $layout->load(); ?>
    </div>
</body>

</html>