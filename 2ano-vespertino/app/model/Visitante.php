<?php

namespace Ifba\Visitas\model;

class Visitante{
    public int $id;
    public string $nome;
    public string  $data;
    protected \PDO $conexao;
    #PDO -> Classe Nativa de conexao com o Banco de Dados -> PHP DATA OBJECT -> Trabalha com a Manipulação de BDs.
    
    public function __construct()
    {
        $servidor = "localhost";
        $banco = "visitas_2vesp";
        $usuario = "root";
        $senha = "";

        $string = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($string,$usuario,$senha);
        var_dump($this->conexao);

    }

}