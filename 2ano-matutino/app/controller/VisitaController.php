<?php

namespace Ifba\Visitas\controller;

class VisitaController {

    public function index()
    {
        $titulo = "Livro de Visitas - 2º ano Matutino";
        require "./app/view/index.php";
    }

    public function mostrarVisitas()
    {
        $visita = new \Ifba\Visitas\model\Visita();
        $titulo = "Livro de Visitas - 2º ano Matutino";
        require "./app/view/mostrar.php";
    }


}