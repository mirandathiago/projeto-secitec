<?php
#DAO - Data Access Object -> Objeto de Acesso e Manipulação dos Dados em Banco. Inserir, Editar, Excluir, Listar

namespace Ifba\Visitas\model;

class VisitanteDAO {

    protected \PDO $conexao;

    public function __construct()
    {
        $servidor = "localhost";
        $banco = "visitas_3anovesp";
        $usuario = "root";
        $senha = "";

        $string = "mysql:host={$servidor};dbname={$banco}";

        $this->conexao = new \PDO($string,$usuario,$senha);
       
    }

    public function inserir($visitante)
    {

        $sql = "INSERT INTO visitantes (nome,data) VALUES (?,?)";

        $consulta = $this->conexao->prepare($sql);
        $consulta->bindValue(1,$visitante->nome);
        $consulta->bindValue(2,$visitante->data);

        return $consulta->execute();

    }

    public function buscarTodos():array
    {
        $sql = "SELECT * FROM visitantes";

        $consulta = $this->conexao->prepare($sql);
        $consulta->execute();

        $dados = $consulta->fetchAll(\PDO::FETCH_CLASS,Visitante::class);

        return $dados;


    }




}