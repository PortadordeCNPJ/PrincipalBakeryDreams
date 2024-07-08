<?php

namespace app\classes;

//Essa classe faz com que carregue sempre as telas, dentro da view
class Layout
{
    private $view;

    public function add($view)
    {
        $this->view = $view;
    }

    public function load()
    {
        return "../app/views/{$this->view}.php";
    }

    public function loadAdmin()
    {
        return "../app/views/admin/{$this->view}.php";
    }

    //Master é o template master, então sempre que carregar uma view, carrega primeiro o template master
    public function master($master)
    {
        return "../app/views/{$master}.php";
    }
}
