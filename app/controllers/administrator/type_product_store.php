<?php

use app\classes\Validation;
use app\models\TipoProduto;
use app\models\Transaction;


$validation = new Validation;

//Aqui $validate recebe o valor de $validation e joga a variavel de $_POST dentro da função. Dessa forma passando pelas filtragens do arquivo de validation.
$validate = $validation->validate($_POST);

//Cria o objeto do Transaction
$transaction = new Transaction;

//Cria o objeto user
$typeProduct = new TipoProduto;

    //Nesse objeto ele executa a função de transactions, cria uma função dentro dessa função passando como parametro $transaction e $validate
    //A função transactions faz o commit e casa der erro faz um rollback;
    $transaction->transactions(function () use ($transaction, $validate,) {

        $transaction->model(TipoProduto::class)->insert($validate);
        /** Aqui ele passa o objeto e passa a função de model que pega o caminho com o 
         * namespace e acha a tabela para dar o insert, assim da o insert nas informações
         * 
         * model(User::class) = tb_usuarios
         * 
         * $validate = Dados do fommulario que vem filtrados
         * */
    });
    echo "<script>alert('Usuario cadastrado com sucesso!!');</script>";

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
