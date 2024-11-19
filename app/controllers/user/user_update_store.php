<?php

use app\models\User;
use app\classes\Validation;

$user = new User;
$validation = new Validation;

$validate = $validation->validate($_POST);

if (isset($validate->dt_nasc) && !empty($validate->dt_nasc)) {
    $dtNasc = new DateTime($validate->dt_nasc);
    $hoje = new DateTime();

    // Calcula a diferença de anos entre a data atual e a data de nascimento
    $idade = $hoje->diff($dtNasc)->y;

    // Verifica se a idade é menor que 18 anos
    if ($idade < 18) {
        echo "<script>alert('O usuário deve ter 18 anos ou mais.');</script>";
        header('location: /');
        exit;
    } else {
        // Atualiza os dados do usuário
        $updated = $user->update($validate, ['id_usuario' => $validate->id_usuario]);

        if ($updated) {
            echo "<script>alert('Usuário atualizado com sucesso!');</script>";
            header('location: /');
            exit;
        } else {
            echo "<script>alert('Erro ao atualizar o usuário.');</script>";
        }
    }
} else {
    echo "<script>alert('Data de nascimento inválida.');</script>";
    header('location: /user/user_edit');
}
