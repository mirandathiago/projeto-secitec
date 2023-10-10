<?php

namespace Ifba\Visitas\model;

class VisitaDao extends \Ifba\Visitas\core\Dao{
    protected $tabela = "visitantes";

    public function inserir($model){

        $sql = "INSERT INTO {$this->tabela} (nome,data) VALUES (?,?)";
        $sqlpreparado = $this->conexao->prepare($sql);
        $sqlpreparado->bindValue(1,$model->nome);
        $sqlpreparado->bindValue(2,$model->data);
        
        $sqlpreparado->execute();

    }

    public function buscarTodos(): array
    {
        $sql = "SELECT * FROM {$this->tabela}";
        $sqlpreparado = $this->conexao->prepare($sql);

        $sqlpreparado->execute();

        $resultado = $sqlpreparado->fetchAll(\PDO::FETCH_CLASS,Visita::class);

        return $resultado;

    }
}