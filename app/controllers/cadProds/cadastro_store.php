<?php

use app\classes\Validation;
use app\models\Transaction;

$validation = new Validation;

//Aqui $validate recebe o valor de $validation e joga a variavel de $_POST dentro da função. Dessa forma passando pelas filtragens do arquivo de validation.
$validate = $validation->validate($_POST);

$transaction = new Transaction;