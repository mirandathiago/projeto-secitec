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
        $dao = new \Ifba\Visitas\model\VisitanteDAO;

        $visitantes = $dao->buscarTodos();
       
        $titulo = "Livro de Visitas - 3º ano Vespertino";
        require "./app/view/mostra.php";
    }

    public function salvar()
    {
       $visitante = new \Ifba\Visitas\model\Visitante();
       $visitante->nome = $_POST["nome"] ?? "";
       $visitante->data = date("Y-m-d h:i:s");

       $dao = new \Ifba\Visitas\model\VisitanteDAO();
      
       if( $dao->inserir($visitante) ){
            echo "<h2>Visita Salva com Sucesso!</h2>";
       }else{
            echo "<h2>Não foi Possível Cadastrar</h2>";
       }
       echo "<a href='/projeto-secitec/3ano-vespertino/'>Voltar</a>";

    }

}