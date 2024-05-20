<?php 
     function navBar() {
        return "<nav class='navbar navbar-expand-lg header-pg-princ navbar-custom'>
        <div class='container'>
            <div class='navbar-brand me-auto d-flex'>
                <a href='#'>
                    <img src='./assets/img/logo.png' width='30' height='24'>
                </a>
            </div>
            <button class='navbar-toggler mx-auto' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDarkDropdown' aria-controls='navbarNavDarkDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDarkDropdown'>
                <ul class='navbar-nav'>
                    <li class='comic-button'>
                        <?php echo menuItem('/cart_products', 'Produtos'); ?>
                    </li>
                    <li class='comic-button'>
                        <?php echo menuItem('/cart', '<i class='fa-solid fa-cart-shopping'></i>'); ?>
                    </li>
                    <li class='nav-item dropdown comic-button'>
                        <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                            <i class='fa-regular fa-user'></i>
                        </a>
                        <ul class='dropdown-menu dropdown-menu-dark'>
                            <li><a class='dropdown-item' href='/user_login'>Login</a></li>
                            <li><a class='dropdown-item' href='/user_create'>Cadastro</a></li>
                            <li><a class='dropdown-item' href='/sair'>Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <form class='d-flex form-search'>
                <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
                <button class='btn btn-outline-success' type='submit'>Search</button>
            </form>
        </div>
    </nav>
    <nav class='navbar navbar-down'>
        <ul class='navbar-nav navbar-down-ul'>
            <li class='nav-item-down'> <?php echo menuItem('/', 'Inicio <i class='fa-solid fa-chevron-down'></i>'); ?> </li>
            <li class='nav-item-down'> <?php echo menuItem('/sobre', 'Sobre Nós <i class='fa-solid fa-chevron-down'></i>'); ?> </li>
            <li class='nav-item-down'> <?php echo menuItem('/contato', 'Contato <i class='fa-solid fa-chevron-down'></i>'); ?> </li>
            <li class='nav-item-down'><a href='#'>  <i class='fa-solid fa-chevron-down'></i> </a></li>
        </ul>
    </nav>";
    }
?>