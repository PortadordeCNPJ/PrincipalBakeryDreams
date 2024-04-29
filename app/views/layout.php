<?php session_start();?>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    <title>Views</title>
</head>

<body>
<header>
        <div class="cabecalho">
            <div class="logo-wrapper"> <img class="logo" src="./assets/img/logo.png">

            </div>

            <nav class="header-pg-princ">
                <ul>
                    <li class="comic-button">
                        <h2><?php echo menuItem("/", "Inicio");?></h2>
                    </li>
                    <li class="comic-button">
                        <h2><?php echo menuItem("/user_create", "Cadastrar");?></h2>
                    </li>
                    <li class="comic-button">
                        <h2><a href="?page=login">Login </a></h2>
                    </li>
                    <li class="comic-button">
                        <h2><a href="?page=produto">Produtos </a> </h2>
                    </li>
                    <?php print "<li class='comic-button'>
                            <h2><a href='?page=logout-usuario'>Sair</a></h2>
                            </li>";
                    ?>
                    <li class="comic-button">
                        <h2><?php echo menuItem("/cart_products", "<i class='fa-sharp fa-regular fa-cart-shopping'></i>");?> </h2>
                    </li>
                    <!--<li class="comic-button">
                       
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>

                        
                         Modal <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>-->
                </ul>

            </nav>
        </div>
    </header>


   <!-- <div class="containter">
        <div class="btn-group">
        <?php //echo menuItem("/", "Inicio");?>
        <?php //echo menuItem("/user_create", "Cadastrar");?>
        <?php //echo menuItem("/cart_products", "Carrinho de Compra");?>
        </div>
    -->
        <!-- Aqui irao carregar as views de dentro do controller-->
        <?php require $layout->load(); ?>
    </div>
</body>

</html>