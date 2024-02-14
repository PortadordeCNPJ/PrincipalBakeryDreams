<!-- MODAL USAR DURDURDUR-->
<?php require "../bootstrap.php";
require "../app/functions/config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LOJINHA</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Galada&family=Open+Sans&display=swap" rel="stylesheet">


</head>

<body id="app" style="height: fit-content; min-height: 100%;" class="d-flex flex-column">
    <header>
        <div class="cabecalho">
        <nav class="header-pg-princ">
                <ul>
                    <li class="comic-button">
                        <h2><a onclick="history.back()">Voltar</a></h2>
                    </li>
                    
                </ul>

            </nav>
            <div class="logo-wrapper"> <img class="logo" src="./assets/img/logo.png">

            </div>

            <nav class="header-pg-princ">
                <ul>
                    <li class="comic-button">
                        <h2><a href="?page=home">Inicio </a></h2>
                    </li>
                    <li class="comic-button">
                        <h2><a href="?page=cadastro">Cadastro </a> </h2>
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
                        <h2><a href="?page=carrinho"></a><i class="fas fa-shopping-cart"></i> </h2>
                    </li>
                </ul>

            </nav>
        </div>
    </header>

    <div class="content">
        <?php require load(); ?>
    </div>

    <div class="restApp"></div>
    <footer id="rodape">
        <div class="logo-wrapper"> <img class="logo" src="./assets/img/logo.png">
        </div>
        <a href="https://wa.me/5545991349889">
            <div class="contact comic-button">
                Telefone para contato: (45) 99134-9889
            </div>
        </a>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="assets/js/scriptproAjax.js"></script>
    <script src="assets/js/scriptpro.js"></script>
</body>

</html>