<?php

namespace Ifba\Visitantes\controller;

class VisitaController{

    public function index()
    {
        $titulo = "Livro de Visitas - 3º ano Matutino";
        require "./app/view/inicio.php";
    }

    public function mostra()
    {
        $titulo = "Livro de Visitas - 3º ano Matutino";
        require "./app/view/mostra.php";

    }

}