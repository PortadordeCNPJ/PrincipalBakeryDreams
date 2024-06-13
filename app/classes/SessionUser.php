<?php

namespace app\classes;

use app\models\User;

class SessionUser
{
    public function sessionUser()
    {
        if (isset($_SESSION['login'])) {
            return $_SESSION['login'];
        }
        return [];
    }

    public function loginUser($email, $senha)
    {
        if (isset($_SESSION['login'])) {
            $_SESSION['login'][$email];
            $_SESSION['login'][$senha];
        }
    }
}
