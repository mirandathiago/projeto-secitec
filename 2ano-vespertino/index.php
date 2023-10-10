<?php

require "./vendor/autoload.php";




$url = $_GET["url"] ?? "/";

switch($url){
    case "/":
        $visitante = new \Ifba\Visitas\model\Visitante();
        
        $controlador = new Ifba\Visitas\controller\VisitaController();
        $controlador->index();
    break;
    case "mostra":
        $controlador = new Ifba\Visitas\controller\VisitaController();
        $controlador->mostraVisitas();
    break;
    default:
        echo "<h2>Página Não encontrada</h2>";
    break;
}




#MVC -> Model - View - Controller
#Model -> Modelo de Negócio -> Prover o acesso aos dados
#View -> Visualização -> Exibição da Aplicação
#Controller -> Controlador -> Meio de campo entre o Model e a View -> Responsável por lidar com as requisições dos usuários e os seus retornos (respostas)

