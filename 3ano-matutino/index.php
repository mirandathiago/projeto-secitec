<?php

require "./vendor/autoload.php";



$url = $_GET['url'] ?? "/";

switch($url){
    case "/":
        $ctr = new \Ifba\Visitantes\controller\VisitaController();
        $ctr->index();
    break;
    case "mostra":
        $ctr = new \Ifba\Visitantes\controller\VisitaController();
        $ctr->mostra();
    break;
    default:
        echo "<h1>Página Não Encontrada</h1>";
}



#MVC -> MODEL VIEW CONTROLLER -> Padrão de Projeto muito utilizado para o desenvolvimento web. Este padrão visa que cada classe tem uma responsabilidade específica na aplicação. E estas classes estão dividas em camadas que tem suas responsabilidades.
#MODEL -> Responsavel pelas regras de negocio da aplicação e o acesso e manipulação dos dados
#VIEW -> Responsável pela visualização das informações. Nesta camada que desenvolvemos o HTML, CSS...
#CONTROLLER -> Reponsável pelo Meio de campo, trabalhando as requisições do usuário e as respostas a serem entregues. Faz intermediação entre o model e a view