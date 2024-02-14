<?php 
function load() {
    // $page = filter_input(INPUT_GET,'page', FILTER_);
    $page = htmlspecialchars($_GET['page']);
    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    if(!file_exists($page)) {
        throw new \Exception("Opa, alguma coisa errada aconteceu");
    }
    return $page;
}
