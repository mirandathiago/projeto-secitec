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
        $visitaDao = new \Ifba\Visitas\model\VisitaDao();

        var_dump($visitaDao->buscarTodos());

        $titulo = "Livro de Visitas - 2º ano Matutino";
        require "./app/view/mostrar.php";
    }

    public function salvar()
    {
        $visita = new \Ifba\Visitas\model\Visita();
        $visita->nome = $_POST["nome"] ?? "";
        $visita->data = date("Y-m-d H:i:s");

        $visitaDao = new \Ifba\Visitas\model\VisitaDao();
        $visitaDao->inserir($visita);
        
        $titulo = "Livro de Visitas - 2º ano Matutino";
        require "./app/view/sucesso.php";
       
    }


}