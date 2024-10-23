<?php

namespace app\classes;

//Essa classe faz com que carregue sempre as telas, dentro da view
class Layout
{
    private $view;

    //Função para fazer o carregamento das views dentro dos controllers
    public function add($view)
    {
        $this->view = $view;
    }

    //Função para fazer o load das páginas normais de dentro das views
    public function load()
    {
        return "../app/views/{$this->view}.php";
    }

    //Faz o carregamento geral das views, layout principal do site
    public function master($master)
    {
        return "../app/views/{$master}.php";
    }

    //Função para fazer o load das páginas de adm
    public function loadAdmPage()
    {
        return "../app/views/administrator/{$this->view}.php";
    }

    //Função que faz um "master layout" para a página de ADM
    public function adminPage($adm_page)
    {
        return "../app/views/{$adm_page}.php";
    }
}
