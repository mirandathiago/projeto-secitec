<?php

namespace Ifba\Visitas\controller;


class VisitasController{

    public function index()
    {
        $titulo = "Livro de Visitas - 3º ano Vespertino";
        require "./app/view/inicio.php";
    }

    public function mostraVisitas()
    {
        $titulo = "Livro de Visitas - 3º ano Vespertino";
        require "./app/view/mostra.php";
    }

}