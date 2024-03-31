<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <!-- Offiline -->
    <script src="././public/assets/js/bootstrap.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="././public/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
    <source src="/public/assets/js/bootstrap.js" type="">
    <source src="/public/assets/js/jquery.js" type="">

    <title>Views</title>
</head>

<body>
    <h1 class="tect-center">Olá</h1>


    <div class="containter">
        <div class="btn-group">
            <a class="btn btn-default" href="/" role="button">Início</a>
            <a class="btn btn-default" href="/user_create" role="button">Cadastrar</a>
            <a class="btn btn-default" href="/cart_products" role="button">Carrinho de Compras</a>
        </div>
        
        <!-- Aqui irao carregar as views de dentro do controller-->
        <?php require $layout->load(); ?>
    </div>
</body>

</html>