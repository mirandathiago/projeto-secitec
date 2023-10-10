<?php

require "vendor/autoload.php";


$url = $_GET['url'] ?? "/";

switch($url){
    case "/":
      $controlador = new Ifba\Visitas\controller\VisitaController();
      $controlador->index();
    break;
    case "mostrar":
      $controlador = new Ifba\Visitas\controller\VisitaController();
      $controlador->mostrarVisitas();
    break;
    default:
      echo "<h1>Erro 404! Página não Encontrada!</h1>";
}







#MVC -> MODEL VIEW CONTROLLER
#MODEL -> MODELO DE NEGÓCIO -> ACESSO AOS DADOS
#VIEW -> VISUALIZAÇÃO -> HTML,CSS,JS
#CONTROLLER -> INTERMEDIAÇÃO ENTRE REQUISIÇÃO E RESPOSTA -> MEIO DE CAMPO ENTRE O MODELO E A VIEW

