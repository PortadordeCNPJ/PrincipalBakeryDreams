<?php

//Faz a ligação do autoload para todas as páginas do site
require "vendor/autoload.php";
require "app/functions/helpers.php";  

//Traz a conexão com o banco de dados para todo o site
app\classes\Bind::bind('connection', app\models\Connection::connect());