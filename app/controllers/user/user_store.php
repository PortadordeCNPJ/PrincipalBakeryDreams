<?php

use app\models\Post;
use app\models\User;
use app\classes\Validation;
use app\models\Transaction;

$validation = new Validation;
$validate = $validation->validate($_POST);

$transaction = new Transaction;

$transaction->transactions(function () use ($transaction, $validate){
    $validate->senha = md5($validate->senha);
    $transaction->model(User::class)->insert($validate);

});

header('location:/');

// $validation = new Validation;
// $validate = $validation->validate($_POST);

// $user = new User;

// //Array que recebe os dados tratados para inserilos dentro da função de insert
// $cadastrado = $user->insert($validate);

// if($cadastrado){
    //     header('location:/');
    // }

    //Usando as transactios para que não haja problema com os dados enviados ao banco de dados
    //Usar sempre o beginTransaction antes de iniciar o uso de conexão
    // $pdo->beginTransaction();
    
    // try {
    //     $user->prepare("insert");
    
    //     $post->prepare("update");
    
    //     $pdo->commit();
        
    // } catch (Exception $e) {
    //     //Caso ocorra algum erro no momento da transação de dados, esse comando irá reverter as alterações para antes da transação
    //     $pdo->rollback();
    // }
    