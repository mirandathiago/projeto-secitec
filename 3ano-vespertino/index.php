<?php

  require "./vendor/autoload.php";


#bit.ly/form-renato

  $url = $_GET["url"] ?? "/";
 
  switch($url){
    case "/":
        $controller = new \Ifba\Visitas\controller\VisitasController();
        $controller->index();
    break;
    case "mostra":
        $controller = new \Ifba\Visitas\controller\VisitasController();
        $controller->mostraVisitas();
    break;
    default:
        echo "404 - Página não Encontrada!";
  }




#MVC -> MODEL, VIEW e CONTROLLER -> Separar as responsabilidades da aplicação nestas 3 partes
#Model -> Modelo de Negócio -> Mapeamento dos elementos importantes para o negócio e vai prover o acesso e manipulação aos dados. 
#View -> Visualização -> Toda a parte de exibição da aplicação vai nesta camada. O que é mostrado para o usuário vai ser feito na view
#Controller -> Controlador -> Meio de campo entre a view e a model. Ele trata a requisição e a resposta para o usuário da aplicação. 
