<?php
#DAO -> Data Access Object

namespace Ifba\Visitas\core;

abstract class Dao{
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
       
    }

    public abstract function inserir($model);

    public abstract function buscarTodos():array;

}