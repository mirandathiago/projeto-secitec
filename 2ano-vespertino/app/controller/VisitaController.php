<?php

namespace Ifba\Visitas\controller;

class VisitaController{

    public function index()
    {
        require "./app/view/inicial.php";
    }

    public function mostraVisitas()
    {
        require "./app/view/mostra.php";
    }

}