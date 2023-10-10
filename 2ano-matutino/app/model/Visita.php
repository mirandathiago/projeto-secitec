<?php

namespace Ifba\Visitas\model;

class Visita{

    public int $id;
    public string $nome;
    public string $data;
    protected \PDO $conexao;
    #PDO -> Php Data Object -> Acesso a Banco de Dados

    public function __construct()
    {
        $banco = "visitas_2mat";
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";

        $string = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($string,$usuario,$senha);
        var_dump($this->conexao);
    }


    
}